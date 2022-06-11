<?php

class Header
{
    public function __construct()
    {
    }

    public static function generate()
    {
?>
        <header class="header">
            <h1 class="header__logo">
                <a href="#">
                    <svg viewBox="0 0 320 62.45">
                        <path d="M19.68,3.19c-.55,1.14.2,3.36.53,5s1,3.63.49,5-2.06,1.69-3.88,1.94c-3.34.45-6.29.83-9.56,1.31-1.43.21-3.57.31-4.41,1-1,.86-.53,2.81-.24,4.26.24,1.25.51,2.14,1.4,2.53,1.1.48,2.92,0,4.22-.2,3.28-.5,5.28-.81,8.34-1.26a17.21,17.21,0,0,1,4.37-.44,2.83,2.83,0,0,1,1.89,1.31,12.57,12.57,0,0,1,.83,3.3,8.09,8.09,0,0,1,.24,3.59c-.5,1.55-2.29,1.72-4.08,2C14.44,33.34,8.43,34.16,3.09,35a5.81,5.81,0,0,0-2.47.73c-1,.83-.54,2.67-.29,4.07a5.13,5.13,0,0,0,.92,2.77c.76.76,2.15.56,3.54.34,5.68-.89,11.36-1.81,16.88-2.62a7,7,0,0,1,2.91,0c2,.58,2.08,3.53,2.47,5.73.71,4,1.28,7.8,2,11.78a4.23,4.23,0,0,0,.73,2.09c.84,1,2.69.56,4.41.24,1.13-.21,2.38-.44,2.86-1.31a4.5,4.5,0,0,0,0-2.67c-.74-3.94-1.56-7.83-2.33-11.69-.28-1.41-1-3.52-.48-4.85a2.53,2.53,0,0,1,1.26-1.26c1.54-.69,3.63-.76,5.57-1.06,3.92-.61,7.49-1.22,11.45-1.85,1.68-.26,4.41-.39,5-1.65.43-.94,0-2.44-.2-3.54a4.53,4.53,0,0,0-1.11-2.76c-.79-.63-2-.4-3.3-.2-4.49.7-8.86,1.42-13.39,2.14a27.06,27.06,0,0,1-5.43.73c-2.5-.14-2.67-2.47-3.06-4.66-.2-1.14-.64-2.44-.24-3.64.58-1.75,3-1.76,5.19-2.08l8.78-1.31c1.44-.22,3.21-.3,3.88-1.17s.24-2.37.05-3.34a6.29,6.29,0,0,0-.87-2.62c-1-1.12-3.42-.41-5.1-.15-2.76.44-5.62.86-8.44,1.31-1.3.21-3.12.69-4.31.29-1.86-.62-1.89-2.88-2.33-5.24-.17-.9-.38-1.83-.53-2.66a6.86,6.86,0,0,0-.73-2.53,2.6,2.6,0,0,0-2.23-.67C22.73,1.76,20.2,2.1,19.68,3.19Z"></path>
                        <path d="M123.18.91c-.5.73-.44,2-.44,3.25V7.84c0,2.45.4,5.44-.58,6.84s-4.52,1.07-7.13,1.07H102c-2,0-5-.36-6.16.39a1.77,1.77,0,0,0-.63.77c-.6,1.26-.56,5.21.2,6.16,1,1.2,4.46.78,6.64.78h13.14c2.28,0,4.91-.26,6.16.43,1.74,1,1.15,4.24.83,6.46-1.31,9-4.94,14.07-10.58,18.52-1.57,1.25-3.43,2.37-5.18,3.54-.55.37-1.28.77-1.31,1.6a2.84,2.84,0,0,0,1,1.8c.52.53,1.07,1.09,1.53,1.5,1,.89,1.87,2.11,3.28,2.23s2.36-.82,3.05-1.31a43.43,43.43,0,0,0,11.88-11.83c3.11-4.88,4.65-11,5.14-18.58a8.24,8.24,0,0,1,.49-2.91c.87-1.73,3.64-1.45,6.11-1.45h11c2.44,0,5.4.44,6.11-1.21.54-1.26.51-4.9-.09-5.92-.76-1.28-3.39-1-5.53-1H137.82c-1.61,0-4,.22-5.23-.39-1.41-.69-1.38-2.2-1.46-4.22-.1-2.42,0-4.62,0-7A6.92,6.92,0,0,0,130.79,1c-.72-1.2-3.84-1-5.53-.93A2.44,2.44,0,0,0,123.18.91Z"></path>
                        <path d="M223.67,5.85v4.71c0,9.39.59,19.15-1.46,26.82-2.35,8.83-8.16,13.5-15.66,17.27-1.11.55-2.47,1.06-2.57,2.18s1.37,2.37,2.11,3.11a11.14,11.14,0,0,0,2.84,2.22c1.66.88,3.42-.5,4.75-1.31,7.83-4.73,13.94-10.18,16.68-20.07,1.52-5.47,1.8-12,1.8-19.21V5.85c0-1.56.21-3.88-.58-4.7C231,.56,230.11.52,229,.52s-2.38,0-3.11,0C223.28.84,223.67,3,223.67,5.85Z"></path>
                        <path d="M194.76,3.38c-.51.76-.43,2.76-.43,4.08V34.62c0,1.58,0,3.32.58,4s2,.68,3.54.68,3,.14,3.83-.43c1.06-.69.92-2.49.92-4.42V7.16c0-1.79.06-3.47-.77-4.17s-4.69-.56-5.92-.43A2.22,2.22,0,0,0,194.76,3.38Z"></path>
                        <path d="M310.82,7.26C307.18,16.34,302.73,25,297.1,31.9a79.32,79.32,0,0,1-20.81,17.56c-1,.61-2.81,1.4-2.86,2.62,0,1.06,1.43,2.33,2.28,3.1l1.46,1.31a3.16,3.16,0,0,0,2.52,1.26c1.24-.1,2.65-1.26,3.68-1.94a91.22,91.22,0,0,0,21-18.57c5.9-7.22,10.5-15.81,14.36-25.18.5-1.2,1.52-3,1.21-4.36-.23-1-1.42-1.57-2.47-2.09a27.82,27.82,0,0,0-3.15-1.45,2.94,2.94,0,0,0-1.17-.2C311.73,4.15,311.31,6,310.82,7.26Z"></path>
                    </svg>
                </a>
            </h1>

            <ul class="header-nav">
                <li class="header-nav__item">
                    <a href="#">
                        <span class="material-icons">login</span>
                        <span class="label">ログイン</span>
                    </a>
                </li>
                <li class="header-nav__item">
                    <a href="#">
                        <span class="material-icons">add</span>
                        <span class="label">新規登録</span>
                    </a>
                </li>
                <li class="header-nav__item header-nav__item--mall">
                    <a href="#">
                        <span class="material-icons">local_mall</span>
                        <span class="label">お買いもの</span>
                    </a>
                </li>
            </ul>

            <form class="header__search-box" action="#">
                <input type="text" placeholder="気になるワードを入力してください" maxlength="50">
                <label>
                    <span class="material-icons">
                        search
                    </span>
                </label>
            </form>
        </header>
<?php
    }
}
