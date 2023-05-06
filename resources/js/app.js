import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})

.use(SpladePlugin, {
    "max_keep_alive": 10,
    "transform_anchors": false,
    "progress_bar": {
        delay: 250,
        color: "linear-gradient(90deg, rgb(193, 126, 255), rgb(124, 222, 255), rgb(128, 255, 174), rgb(255, 224, 131), rgb(255, 133, 133))",
        css: true,
        spinner: false,
    }
})

.mount(el);