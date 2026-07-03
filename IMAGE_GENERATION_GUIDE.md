# InstantPay — Image Generation Guide

> **Important:** Claude Code cannot generate images. Generate these in your own
> image tool (ChatGPT/DALL·E, Midjourney, Gemini, etc.), then **save each file with
> the EXACT name and path below** (overwrite the existing file). The site will pick
> them up automatically — no code change needed. Tell Claude when done and it'll verify.

## Global style (append to every prompt)
> "Clean modern fintech style, bright white background, soft shadows, professional,
> high detail, photorealistic 3D product render, East African / Tanzanian context, no text."

Keep red usage minimal (white-dominant, red only as a small accent), per the site direction.

---

## Priority: F55 Duo POS device (from your PDF reference)

The device is the **FEITIAN F55 Duo POS, customized for InstantPay** (size 106×77×27.5mm).
Front = black touchscreen with on-screen nav buttons. Back = physical numeric keypad
with the **Instapay** logo at the top, a small LCD reading "$550.00 / Please enter your
password", and colored function keys (**red ✕ cancel, yellow back, green ✓ confirm**).
Silicone case comes in **Sea Blue (Pantone 5405C)** or **Red**.

| File to replace | Section | Ratio | Prompt |
|---|---|---|---|
| `public/Solutioons/image_1.png` | POS Solutions | square | "Handheld InstantPay F55 Duo POS terminal, compact rounded device with sea-blue silicone case, physical numeric keypad with green confirm and red cancel keys, small LCD screen, held in a merchant's hand at a counter" |
| `public/images/payment-solutions/pos-solutions-clean.jpg` | POS Devices | landscape | "Two InstantPay F55 Duo POS terminals (one sea-blue, one red case) standing on a clean white surface, product-shot lighting, front touchscreen and keypad visible" |

---

## Other non-slider images

| File to replace | Used for | Ratio | Prompt |
|---|---|---|---|
| `public/Solutioons/about-instantpay.png` *(create new — used by Home About section)* | About InstantPay | portrait | "Professional digital payments scene in Tanzania, person making a contactless mobile payment, blue & teal tones with white, bright and trustworthy" |
| `public/Solutioons/api_image.png` | Card Processing / Payment APIs | square | "Floating smartphone with mobile-money app and glowing API connection nodes linking to bank cards" |
| `public/Solutioons/weareble.jpeg` | Wearable Payments | square | "Person tapping a smartwatch on a contactless payment terminal, NFC waves" |
| `public/Solutioons/Ecommerce.png` | E-Commerce / Pay-by-Link | square | "Laptop and phone showing an online checkout with a secure pay-by-link button and shopping bag" |
| `public/Solutioons/Card Issuance.png` | Card Issuance | square | "Stack of sleek branded debit/credit cards emerging from a card printer" |
| `public/Solutioons/image_2.png` | Cross-Border Payments | square | "Globe with glowing money-transfer arcs connecting Africa to the world, coins and currency" |
| `public/Solutioons/sgr_photo.jpg` | SGR Tanzania | landscape | "Modern electric train at a station with commuters tapping phones to pay fares" |
| `public/images/payment-solutions/cross-border-product.jpg` | Cross-Border Transfers | landscape | "Map of East Africa with glowing transfer routes and floating currency, clean fintech look" |
| `public/images/payment-solutions/cta-payment-experience-premium.jpg` | CTA banner background | wide landscape | "Wide banner of a happy merchant accepting a contactless payment in a bright shop" |

---

## Tips
- **Match the aspect ratio** of the file you're replacing so layouts don't shift.
- Export ~1200px wide for product/square shots, ~1920px for wide banners.
- Keep filenames EXACTLY as listed (including the space in `Card Issuance.png` and the
  misspelling in `weareble.jpeg`), or the pages won't find them.
