# assignment

## 課題内容URL
- https://www.notion.so/44a0c218a2c34766b3bd5b6d7c0e94dc
- https://kinarino.jp/

## 完成イメージ

![screencapture-localhost-3001-2022-06-11-20_03_31 (1)](https://user-images.githubusercontent.com/23373288/173185255-04624560-f7a9-4e0a-ac92-bd5879a9f88a.png)

### ファイル構成

```
sample
├── assets(css, 画像群)
│   ├── components(共通パーツscss)
│   │   ├── \_header.scss(headerパーツ)
│   ├── foundation
│   │   ├── \_functions.scss(無視で大丈夫)
│   │   ├── \_mixins.scss(無視で大丈夫)
│   │   ├── \_reset.scss(reset scssを読み込むもの)
│   │   ├── \_variables.scss(変数系scssを読み込むもの)
│   │   ├── function
│   │   │   └── \_getMapDeep.scss(無視で大丈夫)
│   │   ├── mixin
│   │   │   └── \_responsive.scss(無視で大丈夫)
│   │   ├── reset(reset scss)
│   │   │   └── \_html5doctor.scss(無視で大丈夫)
│   │   └── variable(変数系scss)
│   │   ├── \_breakpoints.scss
│   │   ├── \_color.scss(色情報が変数で格納される。)
│   │   ├── \_font-size.scss(文字の大きさ情報が変数で格納される。)
│   │   ├── \_font-weight.scss(文字の強調情報が変数で格納される。)
│   │   └── \_margin.scss(余白調整の情報が変数で格納される。)
│   ├── img(画像群)
│   │   ├── common
│   │   │   ├── download-app
│   │   │   │   ├── app_frame.png(無視で大丈夫)
│   │   │   │   └── magazine_thumbnail.jpeg(無視で大丈夫)
│   │   │   └── side
│   │   │   ├── art_and_culture.png(sideのアイコン画像)
│   │   │   ├── beauty_and_care.png(sideのアイコン画像)
│   │   │   ├── fashion.png(sideのアイコン画像)
│   │   │   ├── gourmand.png(sideのアイコン画像)
│   │   │   ├── interior.png(sideのアイコン画像)
│   │   │   ├── life_miscellaneous_goods.png(sideのアイコン画像)
│   │   │   ├── lifestyle.png(sideのアイコン画像)
│   │   │   └── travel.png(sideのアイコン画像)
│   │   └── top
│   │   └── article_thumbnail.jpeg(記事の画像)
│   └── pages(ページ単位scss)
│   ├── \_common.scss(共通scss)
│   └── top
│   ├── top.css(topのcss)
│   ├── top.css.map
│   └── top.scss(topのscss)
├── common(共通 html generator)
│   ├── header.php(headerのhtml)
├── header.php(html header)
├── index.php(entrypoint)
└── style.css(無視で大丈夫)
```

### scssをcssへcompileする方法(vscode only)
- https://blanche-toile.com/web/vscode-live-sass-compiler
