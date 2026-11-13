/* Public skin previews use explicit URLs and leave the site default unchanged. */
(() => {
 const form = document.querySelector('.reading-skin-switcher');
 if (!form) return;
 const select = form.querySelector('select');
 const url = new URL(location.href);
 const skin = url.searchParams.get('reading_skin');
 select.addEventListener('change', () => {
  const next = new URL(location.href);
  next.searchParams.set('reading_skin', select.value);
  location.assign(next.href);
 });
 form.querySelector('button').hidden = true;
 if (!skin || ![...select.options].some(option => option.value === skin)) return;
 const home = new URL(form.dataset.readingHome);
 const inside = target => target.origin === home.origin && target.pathname.startsWith(home.pathname) && !target.pathname.includes('/wp-');
 document.querySelectorAll('a[href]').forEach(link => {
  if (link.getAttribute('href').startsWith('#') || link.hasAttribute('download')) return;
  const target = new URL(link.href, location.href);
  if (!inside(target)) return;
  target.searchParams.set('reading_skin', skin);
  link.href = target.href;
 });
 document.querySelectorAll('form').forEach(other => {
  if (other === form || other.method.toLowerCase() !== 'get' || !inside(new URL(other.action, location.href)) || other.querySelector('[name="reading_skin"]')) return;
  const input = document.createElement('input');
  input.type = 'hidden'; input.name = 'reading_skin'; input.value = skin;
  other.append(input);
 });
})();
/* Native document navigation; only the shared drawer and reading preference need JS. */
(() => {
 const drawer = document.getElementById('reading-drawer');
 if (!drawer || !drawer.showModal) return;
 const triggers = [...document.querySelectorAll('[data-reading-open]')];
 const panels = [...drawer.querySelectorAll('[data-reading-panel]')];
 const close = drawer.querySelector('[data-reading-close]');
 const rail = document.querySelector('.reading-rail');
 const railHome = document.createComment('Reading rail position');
 rail.before(railHome);
 let opener = null, savedOverflow = '';
 drawer.close();
 document.body.classList.add('reading-enhanced');
 close.hidden = false;
 triggers.forEach(a => { if (!panels.some(p => p.dataset.readingPanel === a.dataset.readingOpen)) { a.setAttribute('aria-label', rail.querySelector('.reading-brand').getAttribute('aria-label')); return; } a.setAttribute('role', 'button'); a.setAttribute('aria-controls', drawer.id); a.setAttribute('aria-expanded', 'false'); });
 function finish() {
  railHome.after(rail);
  document.documentElement.style.overflow = savedOverflow;
  triggers.forEach(a => { a.setAttribute('aria-expanded', 'false'); a.classList.remove('active'); });
  if (opener?.isConnected) opener.focus({preventScroll: true});
 }
 function closeDrawer() { if (!drawer.open) return; drawer.close(); finish(); }
 drawer.addEventListener('close', () => { if (!drawer.open) finish(); });
 drawer.addEventListener('cancel', e => { e.preventDefault(); closeDrawer(); });
 close.addEventListener('click', closeDrawer);
 triggers.forEach(a => {
  a.addEventListener('keydown', e => { if (e.key === ' ') { e.preventDefault(); a.click(); } });
  a.addEventListener('click', e => {
   const pane = panels.find(p => p.dataset.readingPanel === a.dataset.readingOpen);
   if (!pane) return;
   e.preventDefault();
   if (drawer.open && opener === a) { closeDrawer(); return; }
   opener = a;
   panels.forEach(p => { p.hidden = p !== pane; });
   document.getElementById('reading-drawer-title').textContent = pane.getAttribute('aria-label');
   triggers.forEach(t => { t.setAttribute('aria-expanded', String(t === a)); t.classList.toggle('active', t === a); });
   if (!drawer.open) { savedOverflow = document.documentElement.style.overflow; document.documentElement.style.overflow = 'hidden'; drawer.prepend(rail); drawer.showModal(); }
   const field = pane.querySelector('input[type=search]');
   (field || close).focus({preventScroll: true});
  });
 });
 function containFocus(modal) {
  modal.addEventListener('keydown', e => {
   if (e.key !== 'Tab' || !modal.open) return;
   const fields = [...modal.querySelectorAll('a[href],button:not([disabled]),input:not([disabled]),textarea:not([disabled]),select:not([disabled]),[tabindex="0"]')].filter(x => x.getClientRects().length && !x.closest('[hidden]'));
   const first = fields[0], last = fields[fields.length-1];
   if (!first) { e.preventDefault(); modal.focus(); return; }
   if (e.shiftKey && (document.activeElement === first || document.activeElement === modal)) { e.preventDefault(); last.focus(); }
   else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
  });
 }
 containFocus(drawer);
 drawer.addEventListener('click', e => {
  const r = drawer.getBoundingClientRect();
  if (e.target === drawer && (e.clientX < r.left || e.clientX > r.right || e.clientY < r.top || e.clientY > r.bottom)) closeDrawer();
 });
 const arrival = document.getElementById('reading-arrival');
 if (arrival) {
  containFocus(arrival);
  document.querySelector('[data-reading-arrival-open]')?.addEventListener('click', e => { e.preventDefault(); arrival.showModal(); });
  arrival.querySelectorAll('[data-reading-arrival-close]').forEach(a => a.addEventListener('click', () => arrival.close()));
 }
 const key = 'reading-font:' + (document.querySelector('.reading-skin-switcher')?.dataset.readingHome || rail.querySelector('.reading-brand').href);
 function font(size) {
  if (size === 'default') document.documentElement.style.removeProperty('--reading-user-font');
  else if (['14','15','16','17','18'].includes(size)) document.documentElement.style.setProperty('--reading-user-font', size+'px');
  drawer.querySelectorAll('[data-reading-font]').forEach(b => b.setAttribute('aria-pressed', String(b.dataset.readingFont === size)));
 }
 try { font(localStorage.getItem(key) || 'default'); } catch (_) { /* Storage is optional. */ }
 drawer.querySelectorAll('[data-reading-font]').forEach(b => b.addEventListener('click', () => {
  font(b.dataset.readingFont);
  try { localStorage.setItem(key, b.dataset.readingFont); } catch (_) { /* Storage is optional. */ }
 }));
})();
