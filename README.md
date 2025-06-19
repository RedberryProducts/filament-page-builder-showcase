# Page Builder Plugin Showcase

An interactive demo application showcasing the capabilities of the **Filament Page Builder Plugin** (for Filament 3.x). Explore live examples of block creation, real-time previews (iframe & views), grouping, thumbnails, and custom actions—all built with Filament and Laravel.

---

## 🚀 Getting Started

1. **Clone the repository**

   ```bash
   git clone https://github.com/redberry/page-builder-plugin-showcase.git
   cd page-builder-plugin-showcase
   ```

2. **Install dependencies**

   Please note that you need docker to run this project.

   ```bash
   composer install
   cp .env.example .env
   ./bin/vendor/sail up -d
   ./bin/vendor/sail artisan key:generate
   ```

3. **Set up the database**

   ```bash
   ./bin/vendor/sail artisan migrate --seed
   ```

4. **Serve the application**

   ```bash
   /bin/vendor/sail artisan serve
   ```

Visit `http://localhost/admin` and log in with:

* **Email:** [admin@example.com](mailto:admin@example.com)
* **Password:** password

---

## 🔍 Showcase Features

* **Dynamic Blocks:** Add, edit, reorder, and remove page-builder blocks.
* **Real‑time Preview:** See changes instantly via embedded iframes or Blade view mode.
* **Grouping & Categories:** Organize blocks into custom categories and tabs.
* **Thumbnail Selector:** Visual block picker with image previews.
* **Custom Actions & Buttons:** Demonstrate optimized button rendering and custom action modifiers.
* **Full Filament Form Support:** Use any Filament field inside block schemas.

---

## 📖 Documentation

For detailed usage, configuration options, and block APIs, check the plugin docs:

[https://filamentphp.com/plugins/redberry-page-builder](https://filamentphp.com/plugins/redberry-page-builder)

---

## 🛠️ Built With

* **Laravel** 12.x
* **Filament** 3.x
* **Redberry's Filament Page Builder Plugin**

---
