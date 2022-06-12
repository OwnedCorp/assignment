# assignment

## 課題内容URL
- https://www.notion.so/44a0c218a2c34766b3bd5b6d7c0e94dc
- https://kinarino.jp/

### ファイル構成

```
sample
├── assets(css, 画像群)
│   ├── components(共通パーツscss)
│   │   ├── \_header.scss
│   ├── foundation
│   │   ├── \_functions.scss
│   │   ├── \_mixins.scss
│   │   ├── \_reset.scss
│   │   ├── \_variables.scss
│   │   ├── function
│   │   │   └── \_getMapDeep.scss
│   │   ├── mixin
│   │   │   └── \_responsive.scss
│   │   ├── reset(reset scss)
│   │   │   └── \_html5doctor.scss
│   │   └── variable(変数系scss)
│   │   ├── \_breakpoints.scss
│   │   ├── \_color.scss
│   │   ├── \_font-size.scss
│   │   ├── \_font-weight.scss
│   │   └── \_margin.scss
│   ├── img(画像群)
│   │   ├── common
│   │   │   ├── download-app
│   │   │   │   ├── app_frame.png
│   │   │   │   └── magazine_thumbnail.jpeg
│   │   │   └── side
│   │   │   ├── art_and_culture.png
│   │   │   ├── beauty_and_care.png
│   │   │   ├── fashion.png
│   │   │   ├── gourmand.png
│   │   │   ├── interior.png
│   │   │   ├── life_miscellaneous_goods.png
│   │   │   ├── lifestyle.png
│   │   │   └── travel.png
│   │   └── top
│   │   └── article_thumbnail.jpeg
│   └── pages(ページ単位scss)
│   ├── \_common.scss(共通scss)
│   └── top
│   ├── top.css
│   ├── top.css.map
│   └── top.scss
├── common(共通 html generator)
│   ├── header.php
├── header.php(html header)
├── index.php(entrypoint)
└── style.css
```

### scssをcssへcompileする方法(vscode only)
- https://blanche-toile.com/web/vscode-live-sass-compiler
