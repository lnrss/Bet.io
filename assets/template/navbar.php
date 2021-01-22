<body>
    <header>
        <a href="index.php"><svg width="40" height="40" viewBox="0 0 50 50" class="dice__logo" id="dice" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M49.9218 26.207L44.6953 2.61189C44.5031 1.7492 43.9767 0.997954 43.2313 0.522957C42.486 0.047961 41.5827 -0.11199 40.7196 0.0781962L17.1246 5.30476C16.6972 5.39943 16.2926 5.57736 15.934 5.8284C15.5753 6.07944 15.2696 6.39866 15.0344 6.76785C14.7991 7.13703 14.6389 7.54894 14.5628 7.98006C14.4867 8.41117 14.4963 8.85305 14.591 9.28046L16.7808 19.1661H3.3334C2.44963 19.1671 1.60235 19.5186 0.977426 20.1435C0.352508 20.7684 0.000992565 21.6157 0 22.4995V46.6666C0.000992565 47.5504 0.352508 48.3977 0.977426 49.0226C1.60235 49.6475 2.44963 49.999 3.3334 50H27.5005C28.3843 49.999 29.2316 49.6475 29.8565 49.0226C30.4814 48.3977 30.833 47.5504 30.8339 46.6666V33.8494L47.3881 30.1826C48.2508 29.9905 49.002 29.464 49.477 28.7187C49.952 27.9734 50.112 27.0701 49.9218 26.207ZM27.5005 46.6666H3.3334V22.4995H17.5192L19.8175 32.8753C19.9816 33.615 20.3927 34.2769 20.983 34.7519C21.5733 35.227 22.3077 35.4869 23.0655 35.4891C23.3102 35.4889 23.5541 35.4621 23.793 35.409L27.5014 34.5875L27.5026 46.6666H27.5005ZM46.6676 26.928L23.072 32.1544L17.8456 8.55919L41.4408 3.33243L46.6694 26.9272L46.6676 26.928Z" fill="white"/>
                            <path d="M6 26H11V30H6V26Z" fill="white"/>
                            <path d="M6 39H11V43H6V39Z" fill="white"/>
                            <path d="M20 39H24V43H20V39Z" fill="white"/>
                            <path d="M14 32H18V37H14V32Z" fill="white"/>
                            <path d="M22 11.9061L26.0939 11L27 15.0939L22.9061 16L22 11.9061Z" fill="white"/>
                            <path d="M38 21.9066L42.0934 21L43 25.0934L38.9066 26L38 21.9066Z" fill="white"/>
                            <path d="M30 16.7253L34.0933 16L35 19.2747L30.9068 20L30 16.7253Z" fill="white"/>
                            </svg></a>
            <nav class="navbar">
                <ul class="navbar__nav">
                    <?php
                        $urls = [
                            '<svg id="iconhome" width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.1705 18.5859L22.1223 1.54654L20.9796 0.403815C20.7192 0.145165 20.3671 0 20.0001 0C19.6331 0 19.281 0.145165 19.0206 0.403815L0.829651 18.5859C0.562858 18.8517 0.352008 19.1682 0.209545 19.5168C0.0670819 19.8654 -0.00410599 20.2389 0.000182879 20.6155C0.0178311 22.1685 1.31057 23.4083 2.86361 23.4083H4.73874V37.7784H35.2614V23.4083H37.1763C37.9307 23.4083 38.6411 23.1127 39.1749 22.5789C39.4378 22.3168 39.6461 22.0053 39.7877 21.6622C39.9293 21.3191 40.0015 20.9513 40 20.5802C40 19.8301 39.7044 19.1198 39.1705 18.5859ZM22.4708 34.6017H17.5293V25.6011H22.4708V34.6017ZM32.0847 20.2316V34.6017H25.2946V24.5422C25.2946 23.5672 24.5048 22.7774 23.5297 22.7774H16.4704C15.4954 22.7774 14.7056 23.5672 14.7056 24.5422V34.6017H7.91543V20.2316H3.67985L20.0045 3.92023L21.0237 4.93942L36.3247 20.2316H32.0847Z" fill="#4C495D"/>
                            </svg>' => 'index.php',
                            '<svg id="iconstats" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.5556 0H4.44444C3.2657 0 2.13524 0.468252 1.30175 1.30175C0.468252 2.13524 0 3.2657 0 4.44444V35.5556C0 36.7343 0.468252 37.8648 1.30175 38.6983C2.13524 39.5317 3.2657 40 4.44444 40H35.5556C36.7343 40 37.8648 39.5317 38.6983 38.6983C39.5317 37.8648 40 36.7343 40 35.5556V4.44444C40 3.2657 39.5317 2.13524 38.6983 1.30175C37.8648 0.468252 36.7343 0 35.5556 0ZM35.5556 35.5556H4.44444V4.44444H35.5556V35.5556ZM13.3333 31.1111H8.88889V20H13.3333V31.1111ZM22.2222 31.1111H17.7778V8.88889H22.2222V31.1111ZM31.1111 31.1111H26.6667V15.5556H31.1111V31.1111Z" fill="#4C495D"/>
                            </svg>' => 'stats.php',
                            '<svg id="iconchat" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M36 0H4C1.794 0 0 1.794 0 4V28C0 30.206 1.794 32 4 32H10V39.534L22.554 32H36C38.206 32 40 30.206 40 28V4C40 1.794 38.206 0 36 0ZM36 28H21.446L14 32.466V28H4V4H36V28Z" fill="#4C495D"/>
                            <path d="M10 10H30V14H10V10ZM10 18H24V22H10V18Z" fill="#4C495D"/>
                            </svg>' => 'chat.php',
                            '<svg id="iconvip" width="35" height="40" viewBox="0 0 35 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 35.5556H34.7826V40H0V35.5556ZM15.6522 11.1111H19.1304V28.8889H15.6522V11.1111ZM10.3739 11.1111H14.0696L8.87652 28.8089H5.39826L0.205217 11.1111H3.90087L7.13739 22.4733L10.3739 11.1111ZM26.087 24.4444V28.8889H22.6087V11.1111H29.5652C30.949 11.1111 32.276 11.8135 33.2545 13.0637C34.2329 14.314 34.7826 16.0097 34.7826 17.7778C34.7826 19.5459 34.2329 21.2416 33.2545 22.4918C32.276 23.7421 30.949 24.4444 29.5652 24.4444H26.087ZM26.087 15.5556V20H29.5652C30.0265 20 30.4688 19.7659 30.795 19.3491C31.1211 18.9324 31.3043 18.3671 31.3043 17.7778C31.3043 17.1884 31.1211 16.6232 30.795 16.2064C30.4688 15.7897 30.0265 15.5556 29.5652 15.5556H26.087ZM0 0H34.7826V4.44444H0V0Z" fill="#4C495D"/>
                            </svg>' => 'vip.php',
                            '<svg id="iconhelp" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 8C17.9141 8.00265 15.9144 8.83244 14.4394 10.3074C12.9645 11.7824 12.1347 13.7821 12.132 15.868H16.132C16.132 13.734 17.868 12 20 12C22.132 12 23.868 13.734 23.868 15.868C23.868 17.064 22.906 17.932 21.436 19.12C20.9558 19.4962 20.4946 19.896 20.054 20.318C18.058 22.312 18 24.43 18 24.666V26H22L21.998 24.734C22 24.702 22.064 23.962 22.88 23.148C23.18 22.848 23.558 22.548 23.95 22.232C25.508 20.97 27.866 19.064 27.866 15.868C27.8644 13.7821 27.0352 11.7821 25.5605 10.3069C24.0857 8.83181 22.0859 8.00212 20 8ZM18 28H22V32H18V28Z" fill="#4C495D"/>
                            <path d="M20 0C8.972 0 0 8.972 0 20C0 31.028 8.972 40 20 40C31.028 40 40 31.028 40 20C40 8.972 31.028 0 20 0ZM20 36C11.178 36 4 28.822 4 20C4 11.178 11.178 4 20 4C28.822 4 36 11.178 36 20C36 28.822 28.822 36 20 36Z" fill="#4C495D"/>
                            </svg>' => 'info.php'
                        ];

                        foreach ($urls as $svg => $url) {
                            print '<li '.(($url === $currentPage) ? ' class="active" ': 'class="navbar__item"').'>
                            <a class="navbar__link" href="'.$url.'">'.$svg.'</a></li>';
                        }
                    ?>
                </ul>
            </nav>
            <div class="langage__container">Fr
        </div>
    </header>

