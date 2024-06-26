@section('title')
  <title>Team - ALEX Developing</title>
@endsection

@section('team-nav-status')
active
@endsection

@section('nav-system-control')
  <x-account-popup-public>
  </x-account-popup-public>
@endsection

@section('style')
@vite(['resources/scss/team.scss'])
@endsection

@section('js')
@vite(['resources/js/team.js'])
@endsection

<x-app>
  <section class="all-team">
    <!-- <div class="all-team__circle circle">
      <h5 class="circle__h5">клік</h5>
    </div> -->
    <div class="all-team__peoples-image-group">
      <svg class="all-team__svg-peoples" width="1431" height="1504" viewBox="0 0 1431 1504" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="people2" d="M43.4878 1419.8C43.4878 1436.83 54.204 1485.42 55.9722 1503.1C118.966 1503.1 397.364 1502.76 460.357 1502.76C463.95 1493.69 464.805 1484.45 469.424 1467.52C474.213 1442.89 484.819 1394.13 484.819 1386.09C484.819 1358.41 478.788 1290.89 476.968 1270.53L476.779 1268.41H482.595C481.74 1257.46 481.74 1257.8 481.74 1251.98C481.74 1250.96 483.45 1246.68 486.187 1242.75C486.187 1233.68 488.753 1234.53 489.266 1228.89C486.187 1213.32 482.253 1214.86 480.029 1200.49C477.567 1184.59 471.818 1141.65 468.226 1118.9C464.823 1097.35 461.247 1070.01 453.344 1062.11C421.869 1030.63 417.25 1012.16 417.25 988.723C417.25 943.33 471.567 852.217 477.463 839.045C490.635 809.623 516.465 734.698 545.545 721.356C552.962 717.953 555.655 711.284 560.598 705.105C566.046 698.296 604.053 674.945 610.544 668.586C598.01 649.085 599.6 658.235 588.994 648.142C584.034 626.931 565.046 591.506 556.664 587.416C521.255 570.139 521.939 572.705 503.636 566.376C510.649 552.862 512.702 550.296 509.28 537.809C481.227 528.742 490.635 534.559 471.305 530.795C441.883 509.584 463.094 521.045 427.172 502.057C420.501 493.163 427.172 494.018 411.434 481.189C411.434 465.113 411.434 475.89 413.316 459.469C440.857 463.747 442.567 386.94 446.331 355.636C446.331 333.228 403.566 290.29 393.473 285.159C377.736 272.329 422.553 249.92 382.354 246.156C351.906 237.261 358.828 255.63 346.774 274.381C314.957 274.381 325.22 274.381 304.522 279.512C281.771 300.553 270.652 307.566 251.494 332.028C251.494 373.746 249.958 359.075 249.958 400.794C246.023 439.453 242.944 403.359 213.18 433.295C216.156 486.867 160.665 470.1 160.665 508.39C160.665 523.443 135.861 497.1 116.873 520.535C111.912 533.365 105.925 559.708 109.347 590.157C105.112 597.778 69.4893 611.026 53.2386 655.844C47.0995 672.775 22.6187 751.295 0.894043 940.316C0.893876 1024.65 41.9482 1295.26 35.1058 1314.42C61.1069 1334.27 43.4878 1368.65 43.4878 1419.8Z" fill="#D9D9D9" fill-opacity="0.5"/>
        <path class="people3" d="M1299.8 1385.51C1304.92 1389.1 1305.94 1391.66 1316.71 1393.2C1316.71 1398.49 1414.07 1272.09 1430.3 1174.38C1436.62 1087.26 1388.11 1017.4 1324.39 875.617C1274.51 834.45 1277.76 835.987 1243.25 816.002C1255.55 688.401 1160.75 654.579 1156.14 648.942C1133.42 489.91 938.515 545.938 986.686 721.198C993.518 725.298 992.322 725.639 996.764 727.689C1003.08 740.159 1002.57 753.824 1004.45 761.169C998.814 763.903 1001.72 768.685 997.447 770.906C988.564 774.322 978.75 773.468 978.75 773.468C978.999 776.031 982.927 787.988 974.386 810.368C998.642 849.656 1001.89 862.81 1018.12 944.297C1012.82 968.895 1012.31 991.444 1020.17 1083.18C1016.24 1097.36 1013.88 1119.36 994.72 1143.82C960.556 1181.91 967.389 1170.98 935.617 1185.5C935.828 1195.23 937.837 1236.4 928.1 1268.17C931.516 1277.91 934.761 1277.23 934.761 1288.16C934.761 1306.61 933.391 1307.28 926.387 1318.89C928.1 1325.55 930.145 1328.8 934.761 1331.36C934.761 1336.49 915.459 1354.42 931.853 1501C957.988 1501 1262.56 1501.15 1306.97 1501.15C1304.07 1480.66 1319.78 1491.59 1283.74 1414.04C1295.01 1409.77 1298.43 1394.56 1299.8 1385.51Z" fill="#D9D9D9" fill-opacity="0.5"/>
        <path class="people1" d="M708.599 1439.84C702.449 1439.84 702.278 1441.38 691.346 1439.84C686.563 1442.24 685.196 1458.98 664.698 1501.68C598.592 1501.68 516.257 1501 485.51 1501C507.716 1339.23 521.382 1346.24 516.257 1337.87C511.133 1329.5 507.716 1333.25 503.617 1318.39C505.837 1313.78 505.837 1316 511.133 1301.99C505.837 1294.99 500.884 1283.21 500.884 1277.4C500.884 1273.76 503.1 1259.47 505.837 1255.53C500.884 1246.98 505.324 1219.33 505.837 1213.68C496.613 1192.84 476.784 1181.22 476.784 1181.22C476.784 1181.22 471.823 1141.66 468.231 1118.91C464.828 1097.36 461.251 1070.02 453.349 1062.12C421.874 1030.65 417.255 1012.17 417.255 988.737C417.255 943.344 471.572 852.232 477.468 839.06C490.64 809.638 516.47 734.713 545.55 721.371C552.967 717.968 555.66 711.299 560.603 705.12C566.05 698.311 604.053 674.945 610.544 668.585C612.935 675.76 610.202 675.418 613.448 679.347C625.747 668.244 622.501 672.79 633.775 669.781C646.587 676.614 636.85 678.151 656.494 689.938C654.273 683.959 651.028 665.852 671.868 676.614C682.629 668.244 678.7 671.489 690.316 664.144C695.568 656.742 710.302 626.564 739.512 635.447C740.537 628.614 740.537 630.493 741.732 622.635C721.405 626.735 691.17 543.205 736.266 563.874C731.996 555.504 741.562 519.12 735.07 492.13C736.095 483.077 746.515 454.083 767.013 440.543C785.633 428.244 812.622 425.17 841.149 422.437C853.618 419.874 867.783 428.697 869.846 434.223C871.569 438.84 888.166 440.973 889.49 446.009C890.772 450.885 890.686 430.977 899.398 433.369C913.234 431.661 907.164 466.528 907.768 471.291C920.579 475.39 923.654 501.355 918.871 505.283C920.067 507.504 930.145 528.685 929.462 537.226C929.257 539.785 908.868 528.938 908.963 533.127C905.396 541.066 893.419 583.347 888.465 586.761C893.761 585.739 902.574 580.956 905.718 586.761C907.938 590.861 909.988 592.401 905.718 608.628C894.444 620.415 884.024 653.55 873.433 640.056C863.184 663.287 860.28 662.775 850.714 672.339C850.031 674.219 849.689 675.415 849.177 676.951C886.586 693.862 891.027 685.666 910.159 704.293C914.228 708.917 914.141 719.705 913.504 726.023C936.616 727.416 935.487 731.034 940.906 742.718C951.839 740.839 958.501 735.031 974.386 750.917C978.657 778.248 984.465 782.526 974.386 810.368C998.642 849.656 1001.89 862.809 1018.12 944.297C1012.82 968.894 1012.31 991.443 1020.17 1083.18C1016.24 1097.35 1013.88 1119.35 994.72 1143.82C960.556 1181.91 967.389 1170.98 935.617 1185.5C935.828 1195.23 937.837 1236.4 928.1 1268.17C931.516 1277.91 934.761 1277.23 934.761 1288.16C934.761 1306.61 931.004 1311.73 923.999 1323.35C927.074 1353.07 918.704 1357.17 905.38 1363.49C905.38 1368.61 908.796 1366.91 905.38 1378.52C902.768 1387.4 910.847 1378.69 915.459 1501H727.559C721.239 1478.11 707.232 1448.9 708.599 1439.84Z" fill="#D9D9D9" fill-opacity="0.5"/>
        <g class="all-team__cloud" clip-path="url(#clip0_457_3)">
        <path d="M847.495 262.296C882.506 295.055 966.017 275.812 953.116 221.985C970.004 208.614 978.652 196.96 972.511 174.407C970.214 165.513 964.744 157.731 957.104 152.487C954.582 150.756 951.879 149.34 949.056 148.253C964.11 128.455 967.957 100.932 953.269 79.1503C937.715 56.0834 908.047 48.8614 882.748 57.0025C880.224 26.7676 852.619 6.57811 821.289 1.30027C785.349 -4.78771 763.408 10.9104 751.717 39.846C724.614 15.7553 683.997 9.72228 651.387 29.5039C619.585 48.7983 607.183 90.7483 630.138 119.114C606.568 130.938 584.202 150.94 588.544 179.149C591.796 200.342 609.095 214.202 628.864 217.417C612.129 250.208 621.597 284.09 661.008 299.784C694.113 312.964 729.448 302.056 750.717 276.59C753.271 281.982 756.855 286.851 761.281 290.925C766.462 295.693 772.664 299.251 779.428 301.335C786.193 303.419 793.346 303.975 800.358 302.963C824.503 299.814 840.257 282.961 847.495 262.296Z" fill="#FFA500"/>
        <path d="M976.314 285.864C982.698 288.085 988.03 292.519 991.304 298.327C994.578 304.136 995.567 310.918 994.085 317.392C991.976 324.476 987.134 330.477 980.585 334.125C974.037 337.773 966.295 338.781 959.001 336.935C952.313 335.07 946.615 330.754 943.089 324.884C939.563 319.014 938.479 312.039 940.063 305.408C943.871 291.832 958.95 287.456 971.491 285.516C982.356 284.024 987.027 300.435 976.06 301.777C970.236 302.002 964.548 303.57 959.458 306.352C958.491 307.135 957.727 308.129 957.227 309.255C956.727 310.381 956.505 311.607 956.579 312.832C956.653 314.058 957.021 315.249 957.654 316.309C958.286 317.37 959.165 318.269 960.219 318.934C971.846 327.785 985.606 307.248 971.491 301.927C961.336 298.098 965.703 282.035 976.06 285.665L976.314 285.864Z" fill="#FFA500"/>
        <path d="M946.81 363.374C951.58 365.08 955.484 368.548 957.689 373.041C959.894 377.533 960.226 382.693 958.614 387.423C957.666 389.882 956.22 392.127 954.365 394.022C952.51 395.918 950.283 397.424 947.82 398.452C945.356 399.479 942.706 400.006 940.029 400C937.353 399.994 934.705 399.456 932.246 398.418C929.62 397.59 927.21 396.209 925.184 394.372C923.157 392.535 921.563 390.286 920.512 387.781C919.461 385.276 918.979 382.577 919.099 379.87C919.219 377.163 919.939 374.515 921.208 372.11C923.846 367.676 928.113 364.403 933.132 362.965C938.15 361.527 943.539 362.033 948.19 364.378C950.171 365.52 951.612 367.387 952.196 369.57C952.78 371.753 952.46 374.074 951.307 376.026C950.109 377.935 948.206 379.314 945.996 379.875C943.786 380.437 941.441 380.137 939.451 379.038C938.02 379.038 940.422 379.49 939.451 379.038C938.225 379.038 939.196 378.587 937.663 379.038C937.18 379.207 936.778 379.547 936.539 379.992C936.539 379.992 936.232 381.147 936.539 380.695V381.85C935.568 379.34 935.465 378.737 936.539 380.143C937.458 380.645 937.765 381.8 938.327 382.051C938.889 382.302 940.78 382.703 940.013 382.603C940.371 382.603 942.364 382.603 941.7 382.603C942.62 382.603 942.926 381.549 942.466 382.603C942.466 382.603 943.079 380.043 942.824 381.448C943.131 379.892 943.131 381.448 942.824 380.243C942.517 379.038 942.415 379.54 942.466 379.34C942.517 379.139 941.444 378.988 942.824 379.34C940.64 378.686 938.795 377.232 937.673 375.278C936.55 373.325 936.236 371.022 936.794 368.847C937.415 366.683 938.879 364.847 940.869 363.738C942.859 362.629 945.214 362.336 947.423 362.923L946.81 363.374Z" fill="#FFA500"/>
        <path d="M686.738 120.145V148.804H688.214L712.814 115.84C714.659 113.38 717.119 112.273 719.948 112.273C725.237 112.273 728.312 116.947 728.312 120.514C728.312 121.744 728.066 122.974 726.959 124.696L702.728 156.676L726.959 188.779C728.066 190.501 728.312 191.731 728.312 192.961C728.312 196.528 725.237 201.202 719.948 201.202C717.119 201.202 714.659 200.095 712.814 197.635L688.091 164.548H686.738V193.207C686.738 197.512 682.802 201.202 678.128 201.202C673.331 201.202 669.518 197.512 669.518 193.207V120.145C669.518 115.963 673.331 112.273 678.128 112.273C682.802 112.273 686.738 115.963 686.738 120.145ZM745.122 179.308L748.32 145.36C748.689 141.67 751.395 137.98 755.454 137.98H786.204C791.862 137.98 793.461 142.9 793.461 145.606V193.33C793.461 197.635 789.771 200.956 784.974 200.956C780.177 200.956 776.487 197.635 776.487 193.33V151.879H763.941L761.604 179.062C760.374 192.1 755.331 200.587 743.154 200.587C737.496 200.587 731.961 199.234 731.961 193.453C731.961 188.164 736.266 185.335 740.202 186.073C740.817 186.196 741.309 186.319 741.801 186.319C743.769 186.319 744.753 183.982 745.122 179.308ZM828.285 120.883C828.285 125.68 824.103 129.493 818.691 129.493C813.279 129.493 809.097 125.557 809.097 120.883C809.097 116.086 813.279 112.273 818.691 112.273C824.103 112.273 828.285 116.209 828.285 120.883ZM827.178 144.868V193.33C827.178 197.635 823.488 200.956 818.691 200.956C813.894 200.956 810.204 197.635 810.204 193.33V144.868C810.204 140.809 813.894 137.365 818.691 137.365C823.488 137.365 827.178 140.809 827.178 144.868ZM862.744 177.217H861.022V193.33C861.022 197.635 857.332 200.956 852.535 200.956C847.738 200.956 844.048 197.635 844.048 193.33V144.868C844.048 140.809 847.738 137.365 852.535 137.365C857.332 137.365 861.022 140.809 861.022 144.868V161.227H862.744L877.75 140.932C879.472 138.595 881.686 137.488 884.761 137.488C889.312 137.488 892.756 140.194 893.002 144.376C893.002 145.729 892.51 147.574 891.649 148.804L876.151 169.222L891.649 189.64C892.51 190.87 893.002 192.715 893.002 194.068C892.756 198.25 889.312 200.956 884.761 200.956C881.686 200.956 879.472 199.849 877.75 197.512L862.744 177.217Z" fill="black"/>
        </g>
      </svg>
    </div>
    <div class="all-team__block-name">
      <div class="all-team__block-description">
        <h3 class="all-team__title title">Наша команда</h3>
        <h4 class="all-team__paragraf paragraf"><b>Професіонали своєї справи</b></h4>
        <h4 class="all-team__paragraf paragraf">Ці люди показують реальний результат</h4>
        <h4 class="all-team__paragraf paragraf">Разом вони зроблять Ваш сайт неперевершеним</h4>
      </div>
      <div class="all-team__name people1name">
        <h3 class="all-team__title title">Олександр Гордійчук</h3>
        <h4 class="all-team__paragraf paragraf"><b>Front-End Developer</b></h4>
      </div>
      <div class="all-team__name people2name">
        <h3 class="all-team__title title">Костянтин Бойкун</h3>
        <h4 class="all-team__paragraf paragraf"><b>Full-Stack Developer</b></h4>
      </div>
      <div class="all-team__name people3name">
        <h3 class="all-team__title title">Дмитро Демчук</h3>
        <h4 class="all-team__paragraf paragraf"><b>Back-End Developer</b></h4>
      </div>
      <div class="all-team__name people4name">
        <h3 class="all-team__title title">Марія Пилипова</h3>
        <h4 class="all-team__paragraf paragraf"><b>Web & Ui/Ux Desighner</b></h4>
      </div>
    </div>
    <div class="all-team__circles-choose circles-choose">
      <div class="circles-choose__img first">
        <img src="{{ URL('img/team/alex.jpg') }}" alt="ALEX"></img>
      </div>
      <div class="circles-choose__img second">
        <img src="{{ URL('img/team/kostia.jpg') }}" alt="Костя"></img>
      </div>
      <div class="circles-choose__img third">
        <img src="{{ URL('img/team/dima.jpg') }}" alt="Діма"></img>
      </div>
      <div class="circles-choose__img fourth">
        <img src="{{ URL('img/team/masha.jpg') }}" alt="Маша"></img>
      </div>
    </div>
    <div class="all-team__left-blocks">
      <div class="all-team__account account">
        <div class="account__container-for-slider-logos">
          <div class="account__slider-logos">
            <img src="{{ URL('img/team/alex.jpg') }}" alt="ALEX" class="account__img"></img>
            <img src="{{ URL('img/team/kostia.jpg') }}" alt="Костя" class="account__img"></img>
            <img src="{{ URL('img/team/dima.jpg') }}" alt="Діма" class="account__img"></img>
            <img src="{{ URL('img/team/masha.jpg') }}" alt="Маша" class="account__img"></img>
          </div>
        </div>
        <div class="account__container-for-slider-names">
          <div class="account__slider-names">
            <h4 class="account__name subtitle">Олександр Гордійчук</h4>
            <h4 class="account__name subtitle">Костянтин Бойкун</h4>
            <h4 class="account__name subtitle">Дмитро Демчук</h4>
            <h4 class="account__name subtitle">Марія Пилипова</h4>
          </div>
        </div>
      </div>
      <div class="all-team__profession profession">
        <div class="profession__container-for-slider">
          <div class="profession__slider">
            <div class="profession__slider-item">
              <h3 class="profession__title title">Front-End Developer</h3>
            </div>
            <div class="profession__slider-item">
              <h3 class="profession__title title">Full-Stack Developer</h3>
            </div>
            <div class="profession__slider-item">
              <h3 class="profession__title title">Back-End Developer</h3>
            </div>
            <div class="profession__slider-item">
              <h3 class="profession__title title">Ui/Ux Desighner</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="all-team__about about">
        <h4 class="about__subtitle subtitle">Про себе:</h4>
        <div class="about__container-for-slider">
          <div class="about__slider">
            <div class="about__slider-item">
              <p class="about__text">Засновник проєкту ALEX Developing. Допоможу створити Ваш найкращий сайт. Моя мета - не просто створювати веб-сайти, але й забезпечувати найвищу якість та задоволення для наших клієнтів. Готовий до нових викликів та співпраці!
              </p>
            </div>
            <div class="about__slider-item">
              <p class="about__text">Привіт! Мене звати Костя, і я є Full-Stack розробником у нашій команді. За моєю спиною багаторічний досвід у розробці веб-сайтів з використанням найсучасніших технологій. Я експерт у веб-розробці на клієнтському боці, а також володію широким спектром серверних технологій.
              </p>
            </div>
            <div class="about__slider-item">
              <p class="about__text">Привіт! Я Діма, творчий маг back-end розробки. За допомогою моїх арсеналів знань в області розробки API, оптимізації баз даних та захисту від кіберзагроз ми втілимо ваші амбіційні плани у надійні, швидкі та безпечні веб-сервіси. Готовий зробити кожен ваш проект найкращим у своєму роді, який завоює серця ваших користувачам та залишить конкурентів в пилу.</p>
            </div>
            <div class="about__slider-item">
              <p class="about__text">Привіт! Я Маша, творча душа та винахідлива веб-дизайнерка. Моє призначення - перетворювати ідеї в живописні візуальні мистецтва, які зачаровують серця користувачів. Зі мною кожен проект стає справжнім шедевром, де кожен піксель відображає мою страсть та талант. Люблю працювати в нашій команді найкращих спеціалістів.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="all-team__skills skills">
        <h4 class="skills__subtitle subtitle">Навички:</h4>
        <div class="skills__container-for-slider">
          <div class="skills__slider">
            <div class="skills__slider-item">
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">HTML</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">CSS & SCSS</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">JavaScript</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">React</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Angular</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Git</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Responsive Design</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Cross-Browser</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">npm & Yarn</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">WebPack</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">AJAX</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Progressive Web App</h5>
                  <h6 class="level-line__percent subtitle">80%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 80%;"></div>
                </div>
              </div>
            </div>
            <div class="skills__slider-item">
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">HTML</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">CSS</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">JavaScript</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Node.js</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Python (Django)</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">MySQL</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">MongoDB & Firebase</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Server-Side Rendering</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Client-Side Rendering</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">APIs</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">JSON Web Tokens & OAuth</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Express.js</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Heroku & AWS</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">DevOps & CI/CD</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">CSRF & SQL injection</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Angular</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Git</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Responsive Design</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Cross-Browser</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="person__level-line level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">AJAX</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
            </div>
            <div class="skills__slider-item">
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Node.js</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Ruby on Rails</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">PHP (laravel)</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Django (Python)</h5>
                  <h6 class="level-line__percent subtitle">80%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 80%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">MySQL</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Microsoft SQL Server</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">PostgreSQL & SQLite</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">MongoDB</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">RESTful & GraphQL APIs</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">JSON Web Tokens & OAuth</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Apache</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Caching</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">SQL injection & Cross-Site Scripting</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">unit & integration testing</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">AWS/ Azure/ Google Cloud Platform</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Docker</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Git</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Debugging</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
            </div>
            <div class="skills__slider-item">
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Adobe Creative Suite</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Responsive Design</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Typography</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Color Theory</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">User Interface Design</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">User Experience Design</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Figma</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Adobe XD</h5>
                  <h6 class="level-line__percent subtitle">90%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 90%;"></div>
                </div>
              </div>
              <div class="skills__level level-line">
                <div class="level-line__text">
                  <h5 class="level-line__name subtitle">Знання поточних тенденцій дизайну</h5>
                  <h6 class="level-line__percent subtitle">100%</h6>
                </div>
                <div class="level-line__line">
                  <div style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="all-team__projects projects for-mobile">
        <h4 class="projects__subtitle subtitle">Проєкти:</h4>
        <div class="projects__container-for-slider">
          <div class="projects__slider">
            <div class="projects__slider-item">
              <div class="projects__flex-line">
                <a href="../projects/gordiichuk.com/" class="projects__item alex-map">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Карта відключень світла</p>
                </a>
                <a href="../projects/evil-lev.tech/" class="projects__item evil-lev">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Девелоперська компанія</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/greathouse.rv.ua/" class="projects__item greathouse">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">ЖК "GreatHouse"</p>
                </a>
                <a href="../projects/aobox.tech/" class="projects__item aobox">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Інвестування нерухомості</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/superbulka.shop/" class="projects__item superbulka">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Бургерна (м.Львів)</p>
                </a>
                <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Сфера 3D послуг</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Будівельні роботи та обладнення</p>
                </a>
                <a href="../projects/misto-green.site/" class="projects__item misto-green">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/greenla-park.site/" class="projects__item greenla-park">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
                <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Стоматологічні курси</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Мережа стоматологій</p>
                </a>
              </div>
            </div>
            <div class="projects__slider-item">
              <div class="projects__flex-line">
                <a href="../projects/evil-lev.tech/" class="projects__item evil-lev">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Девелоперська компанія</p>
                </a>
                <a href="../projects/aobox.tech/" class="projects__item aobox">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Інвестування нерухомості</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/superbulka.shop/" class="projects__item superbulka">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Бургерна (м.Львів)</p>
                </a>
                <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Сфера 3D послуг</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Будівельні роботи та обладнення</p>
                </a>
                <a href="../projects/turbosanok.store/" class="projects__item turbosanok">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Гумово-технічні вироби</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/misto-green.site/" class="projects__item misto-green">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
                <a href="../projects/greenla-park.site/" class="projects__item misto-green">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Стоматологічні курси</p>
                </a>
                <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Мережа стоматологій</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/twelve-beach.club/" class="projects__item twelve-beach">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Літній пляж</p>
                </a>
              </div>
            </div>
            <div class="projects__slider-item">
              <div class="projects__flex-line">
                <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Стоматологічні курси</p>
                </a>
                <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Мережа стоматологій</p>
                </a>
              </div>
            </div>
            <div class="projects__slider-item">
              <div class="projects__flex-line">
                <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Сфера 3D послуг</p>
                </a>
                <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Будівельні роботи та обладнення</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/turbosanok.store/" class="projects__item turbosanok">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Гумово-технічні вироби</p>
                </a>
                <a href="../projects/misto-green.site/" class="projects__item misto-green">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/greenla-park.site/" class="projects__item greenla-park">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Житловий комплекс</p>
                </a>
                <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Стоматологічні курси</p>
                </a>
              </div>
              <div class="projects__flex-line">
                <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Мережа стоматологій</p>
                </a>
                <a href="../projects/twelve-beach.club/" class="projects__item twelve-beach">
                  <div class="projects__bg"></div>
                  <div class="projects__bg-blur"></div>
                  <p class="projects__name">Літній пляж</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="all-team__projects projects">
      <h4 class="projects__subtitle subtitle">Проєкти:</h4>
      <div class="projects__container-for-slider">
        <div class="projects__slider">
          <div class="projects__slider-item">
            <div class="projects__flex-line">
              <a href="../projects/gordiichuk.com/" class="projects__item alex-map">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Карта відключень світла</p>
              </a>
              <a href="../projects/evil-lev.tech/" class="projects__item evil-lev">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Девелоперська компанія</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/greathouse.rv.ua/" class="projects__item greathouse">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">ЖК "GreatHouse"</p>
              </a>
              <a href="../projects/aobox.tech/" class="projects__item aobox">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Інвестування нерухомості</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/superbulka.shop/" class="projects__item superbulka">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Бургерна (м.Львів)</p>
              </a>
              <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Сфера 3D послуг</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Будівельні роботи та обладнення</p>
              </a>
              <a href="../projects/misto-green.site/" class="projects__item misto-green">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/greenla-park.site/" class="projects__item greenla-park">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
              <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Стоматологічні курси</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Мережа стоматологій</p>
              </a>
            </div>
          </div>
          <div class="projects__slider-item">
            <div class="projects__flex-line">
              <a href="../projects/evil-lev.tech/" class="projects__item evil-lev">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Девелоперська компанія</p>
              </a>
              <a href="../projects/aobox.tech/" class="projects__item aobox">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Інвестування нерухомості</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/superbulka.shop/" class="projects__item superbulka">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Бургерна (м.Львів)</p>
              </a>
              <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Сфера 3D послуг</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Будівельні роботи та обладнення</p>
              </a>
              <a href="../projects/turbosanok.store/" class="projects__item turbosanok">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Гумово-технічні вироби</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/misto-green.site/" class="projects__item misto-green">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
              <a href="../projects/greenla-park.site/" class="projects__item greenla-park">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Стоматологічні курси</p>
              </a>
              <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Мережа стоматологій</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/twelve-beach.club/" class="projects__item twelve-beach">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Літній пляж</p>
              </a>
            </div>
          </div>
          <div class="projects__slider-item">
            <div class="projects__flex-line">
              <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Стоматологічні курси</p>
              </a>
              <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Мережа стоматологій</p>
              </a>
            </div>
          </div>
          <div class="projects__slider-item">
            <div class="projects__flex-line">
              <a href="../projects/virtual-cube.online/" class="projects__item virtual-cube-online">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Сфера 3D послуг</p>
              </a>
              <a href="../projects/g-drilling.tech/" class="projects__item g-drilling">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Будівельні роботи та обладнення</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/turbosanok.store/" class="projects__item turbosanok">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Гумово-технічні вироби</p>
              </a>
              <a href="../projects/misto-green.site/" class="projects__item misto-green">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/greenla-park.site/" class="projects__item greenla-park">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Житловий комплекс</p>
              </a>
              <a href="../projects/smile-dental-club.xyz/" class="projects__item smile-dental-club">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Стоматологічні курси</p>
              </a>
            </div>
            <div class="projects__flex-line">
              <a href="../projects/g-vision.tech/" class="projects__item g-vision">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Мережа стоматологій</p>
              </a>
              <a href="../projects/twelve-beach.club/" class="projects__item twelve-beach">
                <div class="projects__bg"></div>
                <div class="projects__bg-blur"></div>
                <p class="projects__name">Літній пляж</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>