@extends('kasi.layouts.app', ['title' => 'Surat Masuk'])

@section('content')
    <link rel="stylesheet" href="{{ asset('style/css/suratMasuk.css') }} ">
    <div class="hal-head">
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h1 class="mx-3 mt-3 mb-0"> Surat Masuk </h1>
            </div>
        </div>
    </div>

    <div class="section-body text-center">
        <svg width="450" height="425" viewBox="0 0 450 425" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1213_3761)">
            <path d="M225.001 424.971C334.854 424.971 423.907 329.845 423.907 212.501C423.907 95.1566 334.854 0.0302734 225.001 0.0302734C115.147 0.0302734 26.0938 95.1566 26.0938 212.501C26.0938 329.845 115.147 424.971 225.001 424.971Z" fill="white"/>
            <path opacity="0.1" d="M225.001 424.971C334.854 424.971 423.907 329.845 423.907 212.501C423.907 95.1566 334.854 0.0302734 225.001 0.0302734C115.147 0.0302734 26.0938 95.1566 26.0938 212.501C26.0938 329.845 115.147 424.971 225.001 424.971Z" fill="#4FB96E"/>
            <path d="M95.7291 284.667L0.605469 284.359L0.996854 146.323L66.7726 146.536L96.0314 177.98L95.7291 284.667Z" fill="white"/>
            <path opacity="0.3" d="M66.7727 146.536L66.6836 177.885L96.0314 177.98L66.7727 146.536Z" fill="#4FB96E"/>
            <path d="M96.6304 177.941C96.6268 177.885 96.6164 177.829 96.5995 177.775C96.5929 177.754 96.588 177.734 96.5795 177.714C96.5512 177.643 96.5112 177.579 96.4614 177.524L67.2026 146.08C67.1511 146.026 67.091 145.982 67.0251 145.95C67.0067 145.942 66.9879 145.934 66.9687 145.928C66.9179 145.909 66.8649 145.898 66.8112 145.895C66.7985 145.895 66.787 145.886 66.7742 145.886L0.999063 145.676C0.838379 145.676 0.684276 145.744 0.570655 145.865C0.457035 145.987 0.393203 146.151 0.393203 146.323L0 284.357C0 284.528 0.0638315 284.693 0.177452 284.814C0.291073 284.936 0.445176 285.004 0.60586 285.004L95.7259 285.314C95.8866 285.314 96.0407 285.246 96.1543 285.124C96.2679 285.003 96.3317 284.838 96.3317 284.667L96.6347 177.98C96.6377 177.968 96.631 177.956 96.6304 177.941ZM67.3716 148.101L80.8823 162.615L94.5711 177.326L67.2916 177.238L67.3716 148.101ZM1.21172 283.714L1.59947 146.972L66.1629 147.181L66.0763 177.883C66.0763 178.055 66.1401 178.219 66.2538 178.341C66.3674 178.462 66.5215 178.53 66.6822 178.53L95.4241 178.623L95.1255 284.016L1.21172 283.714Z" fill="#262626"/>
            <path d="M289.652 279.143L159.936 278.723L160.469 90.4883L250.165 90.7789L290.065 133.658L289.652 279.143Z" fill="white"/>
            <path opacity="0.3" d="M250.166 90.7793L250.045 133.529L290.066 133.658L250.166 90.7793Z" fill="#4FB96E"/>
            <path d="M290.664 133.62C290.66 133.563 290.65 133.507 290.633 133.454C290.627 133.433 290.621 133.412 290.613 133.389C290.585 133.319 290.545 133.255 290.495 133.2L250.596 90.3203C250.544 90.2662 250.484 90.2224 250.418 90.1909C250.399 90.1819 250.381 90.1767 250.362 90.1696C250.311 90.1508 250.258 90.1392 250.204 90.1353C250.192 90.1353 250.18 90.1275 250.167 90.1275L160.472 89.8369C160.311 89.8369 160.157 89.9051 160.043 90.0265C159.93 90.1478 159.866 90.3124 159.866 90.4841L159.332 278.719C159.332 278.89 159.396 279.055 159.509 279.176C159.623 279.298 159.777 279.366 159.938 279.366L289.652 279.786C289.813 279.786 289.967 279.718 290.081 279.596C290.195 279.475 290.258 279.31 290.258 279.139L290.671 133.654C290.671 133.646 290.664 133.634 290.664 133.62ZM250.766 92.3434L288.603 133.007L250.651 132.884L250.766 92.3434ZM160.544 278.078L161.074 91.1377L249.558 91.4244L249.437 133.527C249.437 133.699 249.501 133.863 249.614 133.985C249.728 134.106 249.882 134.174 250.043 134.174L289.457 134.304L289.048 278.494L160.544 278.078Z" fill="#262626"/>
            <path d="M449.09 284.666L353.967 284.358L354.358 146.322L420.134 146.535L449.393 177.979L449.09 284.666Z" fill="white"/>
            <path opacity="0.3" d="M420.134 146.535L420.045 177.884L449.393 177.979L420.134 146.535Z" fill="#4FB96E"/>
            <path d="M449.992 177.941C449.989 177.884 449.979 177.828 449.962 177.775C449.955 177.754 449.949 177.734 449.941 177.713C449.913 177.643 449.873 177.579 449.823 177.524L420.564 146.079C420.513 146.025 420.453 145.981 420.387 145.95C420.368 145.941 420.35 145.935 420.33 145.928C420.28 145.909 420.227 145.898 420.173 145.894C420.161 145.894 420.149 145.886 420.136 145.886L354.361 145.673C354.2 145.673 354.046 145.741 353.932 145.862C353.819 145.984 353.755 146.148 353.755 146.32L353.363 284.356C353.363 284.527 353.427 284.692 353.541 284.813C353.654 284.935 353.808 285.003 353.969 285.003L449.093 285.311C449.253 285.311 449.408 285.243 449.521 285.122C449.635 285 449.699 284.836 449.699 284.664L450.002 177.977C449.999 177.968 449.992 177.955 449.992 177.941ZM420.736 148.1L434.241 162.615L447.933 177.326L420.653 177.237L420.736 148.1ZM354.576 283.713L354.963 146.972L419.527 147.181L419.44 177.883C419.44 178.054 419.504 178.219 419.618 178.34C419.731 178.462 419.885 178.53 420.046 178.53L448.788 178.623L448.489 284.015L354.576 283.713Z" fill="#262626"/>
            <path d="M192.6 200.183C197.615 200.183 201.681 195.84 201.681 190.483C201.681 185.126 197.615 180.783 192.6 180.783C187.585 180.783 183.52 185.126 183.52 190.483C183.52 195.84 187.585 200.183 192.6 200.183Z" fill="#292A2E"/>
            <path d="M254.866 200.183C259.881 200.183 263.946 195.84 263.946 190.483C263.946 185.126 259.881 180.783 254.866 180.783C249.851 180.783 245.785 185.126 245.785 190.483C245.785 195.84 249.851 200.183 254.866 200.183Z" fill="#292A2E"/>
            <path d="M235.907 217.308H211.559C211.398 217.308 211.244 217.24 211.131 217.118C211.017 216.997 210.953 216.832 210.953 216.661C210.953 216.489 211.017 216.325 211.131 216.203C211.244 216.082 211.398 216.014 211.559 216.014H235.907C236.068 216.014 236.222 216.082 236.336 216.203C236.449 216.325 236.513 216.489 236.513 216.661C236.513 216.832 236.449 216.997 236.336 217.118C236.222 217.24 236.068 217.308 235.907 217.308Z" fill="#262626"/>
            <path d="M183.233 218.229C187.707 218.229 191.333 216.19 191.333 213.675C191.333 211.16 187.707 209.121 183.233 209.121C178.759 209.121 175.133 211.16 175.133 213.675C175.133 216.19 178.759 218.229 183.233 218.229Z" fill="white"/>
            <path d="M264.233 218.229C268.707 218.229 272.333 216.19 272.333 213.675C272.333 211.16 268.707 209.121 264.233 209.121C259.759 209.121 256.133 211.16 256.133 213.675C256.133 216.19 259.759 218.229 264.233 218.229Z" fill="white"/>
            <g opacity="0.4">
            <path d="M183.233 218.229C187.707 218.229 191.333 216.19 191.333 213.675C191.333 211.16 187.707 209.121 183.233 209.121C178.759 209.121 175.133 211.16 175.133 213.675C175.133 216.19 178.759 218.229 183.233 218.229Z" fill="#4FB96E"/>
            <path d="M264.233 218.229C268.707 218.229 272.333 216.19 272.333 213.675C272.333 211.16 268.707 209.121 264.233 209.121C259.759 209.121 256.133 211.16 256.133 213.675C256.133 216.19 259.759 218.229 264.233 218.229Z" fill="#4FB96E"/>
            </g>
            <path d="M290.26 135.2C274.798 116.238 252.917 104.612 229.432 102.881C205.946 101.15 182.778 109.455 165.025 125.97C135.364 153.563 126.25 199.439 142.864 237.543C146.2 245.178 150.478 252.302 155.583 258.725L156.674 260.105L75.372 352.27C73.8853 353.98 73.0919 356.249 73.1648 358.581C73.2377 360.914 74.171 363.121 75.7613 364.721C77.3515 366.321 79.4696 367.185 81.6537 367.124C83.8377 367.063 85.9106 366.082 87.4201 364.395L168.702 272.244L170.059 273.33C187.6 287.384 209.389 294.006 231.228 291.921C253.068 289.835 273.412 279.189 288.34 262.034C303.268 244.879 311.725 222.43 312.08 199.011C312.435 175.593 304.663 152.862 290.262 135.2H290.26ZM295.357 202.784C294.098 222.255 285.976 240.494 272.629 253.823C259.281 267.152 241.699 274.581 223.427 274.613C221.74 274.613 220.047 274.548 218.349 274.419C206.488 273.559 195.009 269.585 184.931 262.852C174.852 256.118 166.484 246.831 160.57 235.815C154.656 224.8 151.378 212.395 151.027 199.702C150.676 187.009 153.263 174.42 158.558 163.05C163.852 151.681 171.692 141.882 181.381 134.525C191.07 127.167 202.309 122.477 214.102 120.87C225.894 119.263 237.875 120.79 248.983 125.315C260.091 129.839 269.982 137.222 277.779 146.807C284.025 154.435 288.795 163.309 291.812 172.916C294.829 182.524 296.034 192.675 295.357 202.784Z" fill="#4FB96E"/>
            </g>
            <defs>
            <clipPath id="clip0_1213_3761">
            <rect width="450" height="425" fill="white"/>
            </clipPath>
            </defs>
        </svg>
        <p class="text-kosong" > Tidak ada Surat Masuk </p>
    </div>
@endsection
