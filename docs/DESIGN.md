---
name: Andalas Heritage Elegance
colors:
  surface: '#fff8f5'
  surface-dim: '#e1d8d4'
  surface-bright: '#fff8f5'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#fbf2ed'
  surface-container: '#f5ece7'
  surface-container-high: '#efe6e2'
  surface-container-highest: '#e9e1dc'
  on-surface: '#1e1b18'
  on-surface-variant: '#584141'
  inverse-surface: '#34302c'
  inverse-on-surface: '#f8efea'
  outline: '#8c7071'
  outline-variant: '#e0bfbf'
  surface-tint: '#af2b3e'
  primary: '#570013'
  on-primary: '#ffffff'
  primary-container: '#800020'
  on-primary-container: '#ff828a'
  inverse-primary: '#ffb3b5'
  secondary: '#735c00'
  on-secondary: '#ffffff'
  secondary-container: '#fed65b'
  on-secondary-container: '#745c00'
  tertiary: '#2b271e'
  on-tertiary: '#ffffff'
  tertiary-container: '#413d33'
  on-tertiary-container: '#aea89a'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#ffdada'
  primary-fixed-dim: '#ffb3b5'
  on-primary-fixed: '#40000b'
  on-primary-fixed-variant: '#8e0f28'
  secondary-fixed: '#ffe088'
  secondary-fixed-dim: '#e9c349'
  on-secondary-fixed: '#241a00'
  on-secondary-fixed-variant: '#574500'
  tertiary-fixed: '#e9e2d3'
  tertiary-fixed-dim: '#cdc6b8'
  on-tertiary-fixed: '#1e1b13'
  on-tertiary-fixed-variant: '#4b463c'
  background: '#fff8f5'
  on-background: '#1e1b18'
  surface-variant: '#e9e1dc'
typography:
  display-lg:
    fontFamily: Libre Caslon Text
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Libre Caslon Text
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-lg-mobile:
    fontFamily: Libre Caslon Text
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
  headline-md:
    fontFamily: Libre Caslon Text
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Manrope
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Manrope
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Manrope
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1200px
  gutter: 24px
  margin-mobile: 20px
  margin-desktop: 64px
---

## Brand & Style

This design system embodies the "Modern Traditional" aesthetic, bridging the opulent heritage of Minangkabau culture with contemporary digital luxury. It is designed for premium wedding platforms, digital invitations, and high-end bridal concierges.

The brand personality is **regal, celebratory, and meticulously crafted**. It draws inspiration from the intricate details of *Suntiang* (headgear) and *Songket* (textiles), translated into a clean, modern interface. 

The visual style is a hybrid of **Minimalism** and **Tactile Luxury**. It utilizes generous white space (Cream/Off-white) to allow the heavy Maroon and Gold accents to feel breathable and sophisticated rather than overbearing. Elements should evoke the tactile quality of velvet and gold thread through subtle gradients and pattern overlays.

## Colors

The palette is rooted in the traditional West Sumatran wedding colors, refined for high-fidelity screens.

*   **Primary (Deep Maroon - #800020):** Used for primary actions, header backgrounds, and significant brand moments. It represents the "Bundo Kanduang" strength and maturity.
*   **Secondary (Elegant Gold - #D4AF37):** Used for decorative accents, borders, and icon states. It mimics the gold leaf and embroidery of the Songket.
*   **Tertiary (Cream/Off-white - #FDF5E6):** The primary canvas color. It provides a warm, paper-like quality that feels more premium and accessible than a clinical pure white.
*   **Neutral (Charcoal - #2D2926):** Reserved for body text to ensure high legibility against the cream background.

Invert the palette for "Royal Mode" (Dark Mode) sections, where Maroon becomes the background and Gold/Cream become the primary text colors.

## Typography

The typography strategy pairs the authoritative, literary grace of **Libre Caslon Text** with the geometric precision of **Manrope**.

**Libre Caslon Text** is used for all headlines and display text. Its high-contrast strokes and traditional serifs echo the prestige of royal invitations. For larger display sizes, use a slight negative letter-spacing to increase the sense of tension and refinement.

**Manrope** provides a clean, modern counterpoint for body copy and UI labels. It ensures that logistical information (dates, venues, RSVP forms) remains highly readable and functional. Labels should utilize increased letter-spacing and uppercase styling to create a "gallery-tag" aesthetic.

## Layout & Spacing

The design system utilizes a **Fixed Grid** model for desktop to maintain a "curated" feel, switching to a fluid model for mobile devices. 

*   **Rhythm:** An 8px base grid drives all spacing. 
*   **Desktop:** A 12-column grid with wide 64px margins. Use "unbalanced" layouts (e.g., content spanning 7 columns with 5 columns of whitespace) to create an editorial, high-fashion look.
*   **Mobile:** A 4-column grid with 20px margins.
*   **Songket Dividers:** Use a 1px Gold horizontal line with a small geometric Songket motif in the center to separate major content sections. These dividers should have at least 64px of vertical padding to maintain the minimalist breathability.

## Elevation & Depth

Visual hierarchy is established through **Tonal Layering** and **Subtle Materiality** rather than heavy shadows.

1.  **Surfaces:** Use the Cream (#FDF5E6) as the base. Higher-level cards or modals should use a slightly brighter white or a very subtle Gold-tinted inner glow to appear "lifted."
2.  **Outlines:** Instead of shadows, use "Ghost Borders"—1px solid lines in a low-opacity Maroon or Gold (15-20% opacity). This mimics the fine stitching of traditional garments.
3.  **Songket Overlays:** Use a subtle, low-contrast Songket pattern (Pucuk Rebung) as a background texture on Maroon surfaces. The pattern should be only 3-5% different in value from the background color to create a "watermark" effect that catches the light as the user scrolls.

## Shapes

The shape language is primarily **Sharp and Structural**, reflecting the iconic "Rumah Gadang" rooflines and the geometric nature of woven textiles.

*   **Corners:** Use a minimal "Soft" (0.25rem) radius for most UI elements like buttons and input fields to keep them from feeling aggressive, while maintaining a classic look. 
*   **Signature Shape:** Decorative frames and image containers may use a "Pointed Arch" or "Kubah" (dome) style on the top edge only, referencing traditional architecture.
*   **Interactive Elements:** Buttons should be strictly rectangular or have very minimal rounding to maintain a formal tone.

## Components

*   **Buttons:** Primary buttons are Solid Maroon with White/Gold text. Hover states should transition to a Deep Maroon with a 1px Gold border. Use a "double-border" effect for primary "RSVP" or "Call to Action" buttons to signify importance.
*   **Input Fields:** Clean, bottom-border only (Maroon) with Manrope labels. Focus states turn the border Gold. 
*   **Cards:** Use a "Inlaid" look—Maroon cards with a 1px Gold inset border (4px from the edge). This mimics a framed certificate or a traditional "Sirih" box.
*   **Chips/Tags:** Small, pill-shaped elements in Gold with Maroon text, used for categories like "Traditional Ceremony," "Reception," or "Wedding Menu."
*   **Lists:** Bullet points are replaced by a small "Bintang" (star) motif or a simplified diamond shape in Gold.
*   **Modals:** Full-screen Maroon overlays with Gold typography, creating a high-impact, immersive "announcement" moment.