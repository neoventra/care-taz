# Caretaz Healthcare Ltd. — Static Website

HTML/CSS site for Caretaz Healthcare Ltd. (CQC-regulated home care, Nottingham).

## Preview locally

```bash
python3 -m http.server 8080
```

Open http://localhost:8080

## Pages & Netlify routes

Clean URLs are configured in `netlify.toml` (`.html` redirects to the pretty path).

| Route | File |
|---|---|
| `/` | `index.html` |
| `/about-us` | `about-us.html` |
| `/appointment` | `appointment.html` |
| `/contact-us` | `contact-us.html` |
| `/faqs` | `faqs.html` |
| `/join-us` | `join-us.html` |
| `/pricing` | `pricing.html` |
| `/services/` | `services/index.html` |
| `/services/urgent-care` | `services/urgent-care.html` |
| `/services/dementia-care` | `services/dementia-care.html` |
| `/services/overnight-care` | `services/overnight-care.html` |
| `/services/24-hour-care` | `services/24-hour-care.html` |
| `/services/hourly-care` | `services/hourly-care.html` |
| `/services/palliative-care` | `services/palliative-care.html` |
| `/services/cancer-care` | `services/cancer-care.html` |
| `/services/stroke-care` | `services/stroke-care.html` |
| `/services/parkinsons-disease` | `services/parkinsons-disease.html` |
| `/services/hospital-to-home` | `services/hospital-to-home.html` |
| `/services/supported-living` | `services/supported-living.html` |
| `/services/companionship-care` | `services/companionship-care.html` |
| `/services/holiday-companionship` | `services/holiday-companionship.html` |
| `/services/housekeeping-services` | `services/housekeeping-services.html` |
| `/services/live-in-care-for-couples` | `services/live-in-care-for-couples.html` |
| `/services/carer-respite` | `services/carer-respite.html` |

## Deploy to Netlify via Git

### 1. Commit and push to GitHub

This repo is linked to `https://github.com/neoventra/care-taz.git`.

```bash
git add .
git status
git commit -m "Add Netlify config with pretty HTML routes"
git branch -M main
git push -u origin main
```

If the remote already has history, use `git pull --rebase origin main` before pushing.

### 2. Create the Netlify site from Git

1. Open [https://app.netlify.com](https://app.netlify.com) and sign in.
2. **Add new site** → **Import an existing project**.
3. Choose **GitHub** and authorize Netlify if prompted.
4. Select the **`neoventra/care-taz`** repository.
5. Build settings (should match `netlify.toml`):
   - **Branch:** `main`
   - **Build command:** leave as configured (`exit 0`) or blank
   - **Publish directory:** `.` (site root)
6. Click **Deploy site**.

### 3. Confirm routes after deploy

Open your Netlify URL (e.g. `https://something.netlify.app`) and check:

- `/about-us` (not only `/about-us.html`)
- `/services/`
- `/services/dementia-care`
- `/about-us.html` should **301** to `/about-us`

### 4. Custom domain (optional)

1. Netlify → **Domain management** → **Add a domain**.
2. Add `www.caretazhealthcare.co.uk` (or your apex domain).
3. Follow Netlify’s DNS instructions (Netlify DNS or external DNS records).
4. Wait for HTTPS certificate provisioning.

### 5. Ongoing deploys

Every push to `main` triggers a new Netlify deploy automatically.

```bash
git add .
git commit -m "Your change message"
git push origin main
```

Preview deploys: open a pull request against `main`; Netlify posts a preview URL on the PR.

## Config files

- `netlify.toml` — build settings + pretty URL redirects
- `404.html` — custom not-found page
- `.gitignore` — local/OS junk excluded from Git
