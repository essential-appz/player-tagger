# PWA Setup Documentation

Player Tagger is now a fully functional Progressive Web App (PWA).

## What's Included

### 1. Service Worker (`service-worker.js`)
- **Offline caching** - App works without internet
- **Cache-first strategy** - Fast loading from cache
- **Runtime caching** - New resources cached automatically
- **Update notifications** - Alerts when new version available
- **Background sync** - Ready for future cloud sync features

**Cache Strategy:**
- App shell (HTML, CSS, JS) cached on install
- Runtime cache for dynamic content
- Offline fallback to cached index.html

### 2. Web App Manifest (`manifest.json`)
- **App name:** Player Tagger
- **Icons:** 8 sizes (72px to 512px)
- **Display mode:** Standalone (looks like native app)
- **Theme color:** #2196F3 (blue)
- **Orientation:** Any (portrait/landscape)
- **Screenshots:** For app store listings

### 3. PWA Icons (`icons/`)
- Generated from `player-tagger-base.jpeg`
- All required sizes for Android, iOS, Windows
- Optimized PNG format
- Apple touch icons included

## Features

### ✅ **Installable**
Users can install Player Tagger to their home screen:
- Android: "Add to Home Screen" prompt
- iOS: Share → "Add to Home Screen"
- Desktop: Install button in browser address bar

### ✅ **Offline-First**
- Full functionality without internet
- Data stored in localStorage
- App files cached for offline access
- No "No Internet" errors

### ✅ **Fast Loading**
- Cached app shell loads instantly
- Service worker serves files from cache
- Network requests only for updates

### ✅ **Auto-Updates**
- Service worker checks for updates every minute
- Prompts user to reload when update available
- Seamless update process

### ✅ **Native-Like Experience**
- Standalone window (no browser UI)
- Custom splash screen
- Theme color matches brand
- Works like a native app

## How It Works

### First Visit
1. User visits `index.html`
2. Service worker registers
3. App shell cached
4. Icons and manifest loaded

### Subsequent Visits
1. Service worker intercepts requests
2. Serves cached files (instant load)
3. Checks for updates in background
4. Notifies user if update available

### Offline
1. No network connection
2. Service worker serves from cache
3. localStorage data still available
4. Full app functionality works

## Testing PWA Features

### Chrome DevTools
1. Open DevTools (F12)
2. Go to **Application** tab
3. Check:
   - **Manifest:** Verify icons and settings
   - **Service Workers:** Ensure registered and active
   - **Cache Storage:** See cached files
   - **Offline:** Test with Network → Offline checkbox

### Lighthouse Audit
1. Open DevTools
2. Go to **Lighthouse** tab
3. Run **Progressive Web App** audit
4. Should score 90+ for full PWA compliance

### Manual Testing
1. **Install Test:**
   - Click install prompt or browser menu
   - App should open in standalone window

2. **Offline Test:**
   - Turn off WiFi/data
   - Open installed app
   - Should work fully offline

3. **Update Test:**
   - Make a change to service-worker.js version
   - Refresh page
   - Should see update prompt

## Deployment

### Requirements
- **HTTPS required** (service workers only work on HTTPS)
- Exception: `localhost` works for development

### Hosting Checklist
- ✅ Serve over HTTPS
- ✅ Proper MIME types:
  - `manifest.json` → `application/manifest+json`
  - `service-worker.js` → `application/javascript`
- ✅ Cache headers (optional but recommended)
- ✅ All icon files accessible

### CDN/Static Hosting
Works on:
- GitHub Pages (HTTPS by default)
- Netlify
- Vercel
- Cloudflare Pages
- Firebase Hosting
- Any static host with HTTPS

## Updating the PWA

### Service Worker Updates
1. Bump version in `service-worker.js`:
   ```javascript
   const CACHE_NAME = 'player-tagger-v1.2.1'; // Increment this
   ```

2. Deploy changes

3. Users will see update prompt on next visit

### Manifest Changes
Update `manifest.json` as needed:
- Change icons
- Update theme color
- Modify app name
- Add screenshots

### Icon Updates
1. Replace `icons/player-tagger-base.jpeg`
2. Run `./generate-icons.sh` in icons folder
3. Commit new icons

## Browser Support

### Full PWA Support
- ✅ Chrome (Android, Desktop)
- ✅ Edge (Windows, Desktop)
- ✅ Safari (iOS 11.3+, macOS)
- ✅ Firefox (Android, Desktop)
- ✅ Samsung Internet

### Limited Support
- iOS Safari: No install prompt, manual add to home screen
- Older browsers: Graceful fallback (works as regular web app)

## Troubleshooting

### Service Worker Not Registering
- Check HTTPS (or localhost)
- Check browser console for errors
- Verify `service-worker.js` file path

### Install Prompt Not Showing
- Need HTTPS
- Must meet PWA criteria (icons, manifest, service worker)
- Chrome may delay prompt (user engagement based)
- iOS: Always manual (Share → Add to Home Screen)

### Offline Not Working
- Check service worker is active (DevTools → Application → Service Workers)
- Verify cache contains required files
- Check Network tab → Disable cache is OFF

### Update Not Appearing
- Hard refresh (Ctrl+Shift+R or Cmd+Shift+R)
- Clear service worker cache (DevTools → Application → Clear storage)
- Increment version number in service-worker.js

## Future Enhancements

Potential PWA features to add:
- **Push notifications** - Game reminders, updates
- **Background sync** - Sync data when back online
- **Share target** - Share games to Player Tagger
- **Shortcuts** - Quick actions from home screen icon
- **Badges** - Notification count on app icon
- **Periodic sync** - Auto-update game data

## Resources

- [PWA Documentation](https://web.dev/progressive-web-apps/)
- [Service Worker API](https://developer.mozilla.org/en-US/docs/Web/API/Service_Worker_API)
- [Web App Manifest](https://developer.mozilla.org/en-US/docs/Web/Manifest)
- [Workbox](https://developers.google.com/web/tools/workbox) - Advanced service worker toolkit
