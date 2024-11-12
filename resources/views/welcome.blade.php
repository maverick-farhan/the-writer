<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $mailSubject }}</title>
</head>
<body>
    <div class="logo text-center">
        <svg width="433" height="70" viewBox="0 0 533 102" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M47.625 16.375C51.8333 16.375 55.6458 17 59.0625 18.25C62.4792 19.5 65.375 21.2083 67.75 23.375C70.1667 25.5417 72.0208 28.0833 73.3125 31C74.6042 33.875 75.25 36.9375 75.25 40.1875V78.1875C75.25 81.4375 74.6042 84.5208 73.3125 87.4375C72.0208 90.3125 70.1667 92.8333 67.75 95C65.375 97.1667 62.4792 98.875 59.0625 100.125C55.6458 101.375 51.8333 102 47.625 102H28.375C24.1667 102 20.3542 101.375 16.9375 100.125C13.5208 98.875 10.6042 97.1667 8.1875 95C5.8125 92.8333 3.97917 90.3125 2.6875 87.4375C1.39583 84.5208 0.75 81.4375 0.75 78.1875V40.1875C0.75 36.9375 1.39583 33.875 2.6875 31C3.97917 28.0833 5.8125 25.5417 8.1875 23.375C10.6042 21.2083 13.5208 19.5 16.9375 18.25C20.3542 17 24.1667 16.375 28.375 16.375H47.625ZM60.125 22H53.5V62.9375C53.4167 63.4792 53.2708 64.0625 53.0625 64.6875C52.8958 65.3125 52.7292 65.8958 52.5625 66.4375L48.5 67.0625H32.5L28.375 66.4375L27.5 62.6875V22H21V63.625L21.75 69L25.8125 72.9375L32.125 73.6875H48.875L55.25 72.9375L59.25 69L60.125 63.625V22ZM133.25 32L132.375 26.75L128.375 22.75L122 22H106.375L95.125 23.5625V73.6875H101.75V29.3125L106.625 28.5H121.625L125.938 29.1875L126.562 32.875V73.6875H133.25V32ZM121.625 16.375C125.833 16.375 129.646 17 133.062 18.25C136.479 19.5 139.375 21.2083 141.75 23.375C144.167 25.5417 146.021 28.0833 147.312 31C148.604 33.875 149.25 36.9375 149.25 40.1875V78.1875C149.25 81.4375 148.604 84.5208 147.312 87.4375C146.021 90.3125 144.167 92.8333 141.75 95C139.375 97.1667 136.479 98.875 133.062 100.125C129.646 101.375 125.833 102 121.625 102H102.375C98.1667 102 94.3542 101.375 90.9375 100.125C87.5208 98.875 84.6042 97.1667 82.1875 95C79.8125 92.8333 77.9792 90.3125 76.6875 87.4375C75.3958 84.5208 74.75 81.4375 74.75 78.1875V40.1875C74.75 36.9375 75.3958 33.875 76.6875 31C77.9792 28.0833 79.8125 25.5417 82.1875 23.375C84.6042 21.2083 87.5208 19.5 90.9375 18.25C94.3542 17 98.1667 16.375 102.375 16.375H121.625Z" fill="#E40000"/>
        <path d="M222.6 69.488C222.6 74.5227 219.997 79.4293 214.792 84.208C209.587 88.9013 202.845 92.6987 194.568 95.6C186.291 98.416 177.843 99.824 169.224 99.824C164.189 99.824 159.667 98.416 155.656 95.6C151.731 92.784 149.768 90.1813 149.768 87.792C149.768 85.3173 150.493 84.08 151.944 84.08C152.285 84.08 153.949 85.0187 156.936 86.896C160.008 88.688 163.208 89.6267 166.536 89.712C165.341 89.1147 164.189 88.0053 163.08 86.384C162.056 84.7627 161.544 83.2267 161.544 81.776C161.544 80.3253 162.568 76.272 164.616 69.616C170.931 49.5627 174.173 34.16 174.344 23.408H173.32C171.784 23.408 170.205 22.4693 168.584 20.592C166.963 18.6293 166.152 17.0507 166.152 15.856C166.152 14.4053 167.944 13.168 171.528 12.144C175.197 11.0347 179.592 10.48 184.712 10.48C196.659 10.48 205.875 12.1013 212.36 15.344C218.845 18.5867 222.088 23.28 222.088 29.424C222.088 34.544 219.912 39.1947 215.56 43.376C211.293 47.5573 205.021 50.928 196.744 53.488L197.896 53.616C205.064 54.0427 210.952 55.792 215.56 58.864C220.253 61.936 222.6 65.4773 222.6 69.488ZM210.568 30.064C210.568 27.248 209.117 25.072 206.216 23.536C203.4 21.9147 199.944 21.104 195.848 21.104C191.837 21.104 186.931 21.616 181.128 22.64C183.517 25.2 184.712 27.6747 184.712 30.064C184.712 32.368 183.219 39.408 180.232 51.184C182.28 49.904 185.48 48.4533 189.832 46.832C194.184 45.1253 197.597 43.632 200.072 42.352C202.632 41.072 204.467 39.9627 205.576 39.024C206.771 38 207.88 36.6773 208.904 35.056C210.013 33.4347 210.568 31.7707 210.568 30.064ZM211.464 68.976C211.464 66.416 208.477 64.2827 202.504 62.576C196.616 60.784 190.728 59.888 184.84 59.888C182.536 59.888 180.531 58.6933 178.824 56.304C173.619 76.8693 170.205 88.0053 168.584 89.712C174.643 89.5413 181 88.4747 187.656 86.512C194.312 84.464 199.944 81.8187 204.552 78.576C209.16 75.3333 211.464 72.1333 211.464 68.976ZM259.684 11.504C259.684 27.5467 256.356 48.368 249.7 73.968C245.433 91.376 242.447 100.08 240.74 100.08C239.545 100.08 238.137 99.1413 236.516 97.264C234.98 95.3867 234.212 93.936 234.212 92.912C234.212 91.888 235.449 86.5973 237.924 77.04C240.399 67.4827 242.873 55.7493 245.348 41.84C247.823 27.8453 249.06 15.2587 249.06 4.07999C249.06 2.88533 249.231 2.032 249.572 1.52C249.913 1.008 250.639 0.751999 251.748 0.751999C252.857 0.751999 254.436 1.98933 256.484 4.464C258.617 6.85333 259.684 9.2 259.684 11.504ZM311.155 40.176C311.496 38.8107 311.838 37.872 312.179 37.36C312.52 36.848 313.246 36.592 314.355 36.592C315.55 36.592 316.958 37.7013 318.579 39.92C320.286 42.1387 321.139 44.272 321.139 46.32C321.139 47.4293 319.262 54 315.507 66.032C311.752 78.064 308.851 87.6213 306.803 94.704C305.779 98.288 304.328 100.08 302.451 100.08C301.342 100.08 300.403 99.6107 299.635 98.672C298.867 97.7333 298.483 96.0267 298.483 93.552C298.483 91.0773 299.464 86.5973 301.427 80.112C297.843 85.9147 293.96 90.6933 289.779 94.448C285.598 98.2027 281.758 100.08 278.259 100.08C274.846 100.08 271.603 98.4587 268.531 95.216C265.459 91.9733 263.923 88.6453 263.923 85.232C263.923 77.1253 266.27 67.0133 270.963 54.896C275.742 42.6933 279.71 36.592 282.867 36.592C284.403 36.592 285.726 37.3173 286.835 38.768C288.03 40.1333 288.627 41.712 288.627 43.504C288.627 44.272 287.475 47.0453 285.171 51.824C282.867 56.5173 280.563 62.064 278.259 68.464C275.955 74.7787 274.803 80.3253 274.803 85.104C274.803 86.4693 275.23 87.6213 276.083 88.56C276.936 89.4133 277.96 89.84 279.155 89.84C282.398 89.84 286.238 86.9813 290.675 81.264C295.198 75.5467 299.294 68.8907 302.963 61.296C306.632 53.7013 309.363 46.6613 311.155 40.176ZM335.148 52.208L334.764 42.608C334.764 38.5973 335.703 36.592 337.58 36.592C339.201 36.592 340.737 37.6587 342.188 39.792C343.724 41.84 344.492 44.3147 344.492 47.216C344.492 50.032 344.407 52.1653 344.236 53.616C351.66 42.352 358.7 36.72 365.356 36.72C369.537 36.72 371.628 37.744 371.628 39.792C371.628 40.816 371.159 41.7547 370.22 42.608C369.281 43.4613 367.788 44.4427 365.74 45.552C361.217 47.5147 357.377 50.544 354.22 54.64C351.148 58.6507 348.631 63.216 346.668 68.336C344.705 73.456 343.127 77.7653 341.932 81.264C340.823 84.7627 339.969 87.4933 339.372 89.456C338.775 91.4187 338.092 93.3387 337.324 95.216C335.959 98.6293 334.38 100.336 332.588 100.336C331.137 100.336 329.943 99.5253 329.004 97.904C328.151 96.1973 327.724 94.576 327.724 93.04C327.724 91.4187 328.449 88.2613 329.9 83.568C333.399 72.816 335.148 62.3627 335.148 52.208ZM377.523 52.208L377.139 42.608C377.139 38.5973 378.078 36.592 379.955 36.592C381.576 36.592 383.112 37.6587 384.563 39.792C386.099 41.84 386.867 44.3147 386.867 47.216C386.867 50.032 386.782 52.1653 386.611 53.616C394.035 42.352 401.075 36.72 407.731 36.72C411.912 36.72 414.003 37.744 414.003 39.792C414.003 40.816 413.534 41.7547 412.595 42.608C411.656 43.4613 410.163 44.4427 408.115 45.552C403.592 47.5147 399.752 50.544 396.595 54.64C393.523 58.6507 391.006 63.216 389.043 68.336C387.08 73.456 385.502 77.7653 384.307 81.264C383.198 84.7627 382.344 87.4933 381.747 89.456C381.15 91.4187 380.467 93.3387 379.699 95.216C378.334 98.6293 376.755 100.336 374.963 100.336C373.512 100.336 372.318 99.5253 371.379 97.904C370.526 96.1973 370.099 94.576 370.099 93.04C370.099 91.4187 370.824 88.2613 372.275 83.568C375.774 72.816 377.523 62.3627 377.523 52.208ZM463.29 57.84C463.29 62.3627 460.815 66.0747 455.866 68.976C451.002 71.792 445.455 73.2 439.226 73.2C433.082 73.2 427.493 72.5173 422.458 71.152C421.263 74.9067 420.666 78.2773 420.666 81.264C420.666 84.1653 421.562 86.4267 423.354 88.048C425.231 89.6693 428.261 90.48 432.442 90.48C436.709 90.48 441.061 89.7547 445.498 88.304C450.021 86.768 452.495 86 452.922 86C455.141 86 456.25 86.8533 456.25 88.56C456.25 90.864 453.647 93.3813 448.442 96.112C443.237 98.7573 438.159 100.08 433.21 100.08C426.554 100.08 421.135 98.1173 416.954 94.192C412.773 90.1813 410.682 85.1467 410.682 79.088C410.682 73.0293 412.303 66.7147 415.546 60.144C418.789 53.488 422.97 47.8987 428.09 43.376C433.21 38.8533 438.287 36.592 443.322 36.592C448.357 36.592 452.922 38.9813 457.018 43.76C461.199 48.5387 463.29 53.232 463.29 57.84ZM443.962 46.704C440.805 46.704 437.519 48.368 434.106 51.696C430.693 54.9387 427.791 58.992 425.402 63.856C428.815 64.624 432.698 65.008 437.05 65.008C441.402 65.008 445.199 64.3253 448.442 62.96C451.685 61.5093 453.306 59.632 453.306 57.328C453.306 55.024 452.239 52.6773 450.106 50.288C448.058 47.8987 446.01 46.704 443.962 46.704ZM524.627 0.751999C525.992 0.751999 527.656 2.032 529.619 4.592C531.667 7.06666 532.691 9.41333 532.691 11.632C532.691 13.8507 531.624 20.1653 529.491 30.576C527.358 40.9013 524.883 51.6107 522.067 62.704C515.923 87.6213 511.87 100.08 509.907 100.08C508.712 100.08 507.39 99.3547 505.939 97.904C504.574 96.368 503.891 95.0453 503.891 93.936C503.891 92.8267 504.19 90.608 504.787 87.28C496.424 95.8133 489.128 100.08 482.899 100.08C479.144 100.08 475.731 98.3733 472.659 94.96C469.672 91.5467 468.179 88.0053 468.179 84.336C468.179 79.0453 469.587 72.7733 472.403 65.52C475.304 58.1813 479.443 51.5253 484.819 45.552C490.195 39.5787 495.912 36.592 501.971 36.592C508.03 36.592 512.254 40.2187 514.643 47.472C518.995 29.3813 521.384 15.088 521.811 4.592C521.811 2.032 522.75 0.751999 524.627 0.751999ZM510.547 63.6C510.547 58.992 509.736 55.1093 508.115 51.952C506.579 48.7947 504.702 47.216 502.483 47.216C498.814 47.216 495.059 49.4773 491.219 54C487.379 58.5227 484.307 63.728 482.003 69.616C479.784 75.4187 478.675 80.4533 478.675 84.72C478.675 86.256 479.23 87.4933 480.339 88.432C481.448 89.3707 482.771 89.84 484.307 89.84C487.635 89.84 492.115 87.4507 497.747 82.672C503.464 77.8933 507.603 72.2613 510.163 65.776L510.547 64.24V63.6Z" fill="black"/>
        </svg>
    </div>
    <div class="content p-2">
        <h1 class="font-extrabold text-lg text-center">Welcomes you!</h1>
        <p class="font-bold">{{ $mailMessage }}</p>
        <p>Thank you once again.</p>
        <strong>Mohammad Farhan Mushtaque</strong>
        <br />
        <em>&#40;Developer, Author, Maintainer of Unblurred&#41;</em>
    </div>
</body>
</html>
