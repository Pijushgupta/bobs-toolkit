let mix = require("laravel-mix");
mix.js("src/main.js", "dist").react();
mix.css("src/main.css", "dist",[require("tailwindcss")]);
mix.options({ // Do not process URLs anymore
    processCssUrls: false
  });