@extends('user.layouts.app', ['title' => 'Beranda'])
@section('content')
<link rel="stylesheet" href="{{ asset('style/css/beranda.css') }}">
    <div class="beranda-head">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6">
                    <div class="head-left">
                        <p class="head-left-1" > Selamat Datang, </p>
                        <p class="head-left-2" > Warga Kalabbirang </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="head-right">
                        <p class="head-right-title" >Program Layanan</p>
                        <div class="card mt-4 ms-4 me-4">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg height="69.35" viewBox="0 0 634.38742 584.34971" width="82.52" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-282.80629 -157.82514)"><path d="m574.10044 479.32759c-.11329 0-.18457-.00293-.20948-.0044l-13.56445.00147v-2h13.61349c.31518.01123 6.74584.19287 12.67089-6.99659 8.82959-10.71484 16.08057-37.23974.48145-102.75586-20.9751-88.0957-3.481-165.92334 5.01392-195.29541a9.75245 9.75245 0 0 0 -9.38306-12.45166h-202.5754a9.79616 9.79616 0 0 0 -7.89966 4.021c-3.59863 4.9502-8.53711 14.46-11.62744 31.65527l-1.96826-.35351c3.15722-17.56885 8.25635-27.3584 11.978-32.47754a11.801 11.801 0 0 1 9.51734-4.84522h202.57546a11.75275 11.75275 0 0 1 11.30444 15.00733c-8.45117 29.21972-25.85473 106.64355-4.9895 194.27685 15.81836 66.4375 8.21387 93.53711-.95068 104.57178-6.04493 7.27783-12.70533 7.64649-13.98706 7.64649z" fill="#e6e6e6"></path><path d="m537.60044 515.82759c-.11329 0-.18457-.00293-.20948-.0044l-13.56445.00147v-2h13.61349c.31689.00976 6.74584.19287 12.67089-6.99659 8.82959-10.71484 16.08057-37.23974.48145-102.75586-20.9751-88.0957-3.481-165.92334 5.01392-195.29541a9.75245 9.75245 0 0 0 -9.38306-12.45166h-202.5754a9.79616 9.79616 0 0 0 -7.89966 4.021c-3.59863 4.9502-8.53711 14.46-11.62732 31.65527l-1.9685-.35351c3.15734-17.56885 8.25647-27.3584 11.97814-32.47754a11.801 11.801 0 0 1 9.51734-4.84522h202.57544a11.75275 11.75275 0 0 1 11.30444 15.00733c-8.45117 29.21972-25.85473 106.64355-4.9895 194.27685 15.81836 66.4375 8.21387 93.53711-.95068 104.57178-6.04493 7.27783-12.70533 7.64649-13.98706 7.64649z" fill="#ccc"></path><path d="m501.10044 552.32759c-.11329 0-.18457-.00293-.20948-.0044l-199.45312.00147a11.75012 11.75012 0 0 1 -10.92835-16.10206c7.23682-18.08056 16.98084-61.459.93152-148.83935-18.95141-103.18018-1.98486-140.46973 6.18933-151.71289a11.80128 11.80128 0 0 1 9.51758-4.84522h202.57532a11.75275 11.75275 0 0 1 11.30444 15.00733c-8.45117 29.21972-25.85473 106.64355-4.9895 194.27685 15.81836 66.4375 8.21411 93.53711-.95068 104.57178-6.04493 7.27783-12.70533 7.64649-13.98706 7.64649zm-193.95252-319.50245a9.79644 9.79644 0 0 0 -7.8999 4.021c-8.02258 11.03467-24.65149 47.75732-5.84 150.17578 15.33191 83.47363 7.896 127.61377-1.04187 149.94385a9.58718 9.58718 0 0 0 .97705 9.06445 9.76294 9.76294 0 0 0 8.09461 4.29444h199.50219c.31494.01513 6.74584.19335 12.67089-6.99659 8.82959-10.71484 16.08057-37.23974.48145-102.75586-20.9751-88.0957-3.481-165.92334 5.01392-195.29541a9.75245 9.75245 0 0 0 -9.38306-12.45166z" fill="#3f3d56"></path><path d="m475.26725 320.82514h-159a8 8 0 1 1 0-16h159a8 8 0 0 1 0 16z" fill="#4FB96E"></path><path d="m475.26725 354.82514h-159a8 8 0 1 1 0-16h159a8 8 0 0 1 0 16z" fill="#ccc"></path><path d="m475.26725 388.82514h-159a8 8 0 1 1 0-16h159a8 8 0 0 1 0 16z" fill="#ccc"></path><path d="m487.26725 422.82514h-159a8 8 0 1 1 0-16h159a8 8 0 0 1 0 16z" fill="#ccc"></path><path d="m487.26725 456.82514h-159a8 8 0 1 1 0-16h159a8 8 0 0 1 0 16z" fill="#ccc"></path><path d="m391.26725 286.82514h-75a8 8 0 1 1 0-16h75a8 8 0 0 1 0 16z" fill="#4FB96E"></path><path d="m381.58294 511.64686c1.6141-6.835 9.19795-9.07539 15.39832-8.82485a65.72829 65.72829 0 0 1 11.6109 1.83727c3.9841.89132 7.92945 1.94677 11.85492 3.06617 7.19849 2.05274 14.32272 4.53559 21.63978 6.14065 6.09146 1.33622 12.71116 2.11988 18.78589.27517 5.83939-1.77324 10.79336-6.12626 12.38213-12.14463 1.49722-5.67157-.55835-11.8728-6.05412-14.46457-5.01175-2.36352-11.34247-1.1616-13.82653 4.18356-2.80075 6.02663-.00233 12.59922 4.43248 16.96033a49.66774 49.66774 0 0 0 8.23778 6.257 30.67633 30.67633 0 0 0 9.86375 4.41791c5.785 1.23563 12.67623-.58511 15.65954-6.112a10.32933 10.32933 0 0 0 1.17184-4.03693c.17661-1.92177-2.8245-1.90975-3 0-.50576 5.50343-6.95071 8.08082-11.77032 7.4771a23.92386 23.92386 0 0 1 -9.12538-3.54166 53.47235 53.47235 0 0 1 -7.55822-5.33292c-4.08779-3.53755-7.9197-9.359-5.17421-14.87935 2.23555-4.495 8.06322-4.4502 11.60773-1.55128 4.29251 3.51068 3.5271 9.88266.69595 14.05172-3.13485 4.61626-8.81678 6.55143-14.174 6.76014-5.821.22678-11.59339-1.109-17.15667-2.68883-6.91261-1.963-13.75632-4.15989-20.70215-6.00791-3.94328-1.04917-7.9169-1.996-11.93125-2.73275a39.377 39.377 0 0 0 -11.56954-.80089c-6.25992.72286-12.65 4.36679-14.19142 10.89406-.44336 1.87745 2.4486 2.6787 2.89284.79752z" fill="#3f3d56"></path><path d="m688.0826 681.2653a458.03107 458.03107 0 0 0 4.318 58.85469c.09456.685.19759 1.36993.29256 2.05487l184.40236-1.03035c.54143-.68028 1.07434-1.36872 1.59067-2.06539 1.7216-2.30561 3.33516-4.67675 4.81639-7.12968 7.11952-11.81721 10.37891-25.65281 7.11268-35.19857l-.0585-.14833a16.75017 16.75017 0 0 0 -3.26922-5.6805c-7.44693-8.38264-22.50384-6.9853-36.16768-.21914 12.2556-13.41509 22.01422-30.3429 22.7557-45.4529.727-14.7382-6.97951-25.26672-15.33816-34.21415-.27427-.29578-.54849-.58335-.82271-.87086-.1331-.14791-.27422-.28757-.40692-.43548-6.52154-6.81857-14.12452-13.54026-25.12937-12.72717-12.06945.89334-25.45087 11.00284-34.83337 22.78314-9.38254 11.772-15.61745 25.14522-21.93723 38.19682-6.32789 13.04338-13.17414 26.42-23.3284 37.56868 13.75326-17.39607 24.842-37.18893 28.93817-56.43894s.49124-37.73839-11.76613-46.80442a28.669 28.669 0 0 0 -12.55765-5.067c-.52878-.08788-1.06593-.15923-1.61151-.22227-11.34689-1.291-24.89474 2.63335-36.42155 12.014-12.69423 10.32875-21.49523 25.64065-25.87422 40.1763-4.3786 14.53564-4.84523 28.52909-4.70391 42.05665z" fill="#f2f2f2"></path><path d="m808.72937 741.5265 3.52612-.0197q1.67943-1.05 3.3747-2.07535c.69964-.44162 1.40743-.86679 2.11558-1.30023q17.54426-10.71507 35.308-20.55589 17.74752-9.849 35.67351-18.79043a1.47784 1.47784 0 0 0 .84954-1.68963.42594.42594 0 0 0 -.05876-.12352c-.16669-.31292-.53924-.443-1.083-.17568-1.46583.735-2.94013 1.47-4.40586 2.22156q-17.975 9.09448-35.79561 19.09674-17.80839 9.998-35.41384 20.87854c-.24677.15-.4939.30834-.74067.45838-1.11926.69177-2.23045 1.38349-3.34971 2.07521z" fill="#fff"></path><path d="m763.26442 741.78054 2.18044-.01218c.49178-.68822.97509-1.37643 1.46687-2.0647q17.33163-24.30411 34.656-48.60824 28.37064-39.78961 56.72434-79.57913a1.40436 1.40436 0 0 0 .24533-.48041c.16166-.58731-.26976-.93177-.82271-.87086a1.6564 1.6564 0 0 0 -1.15209.73324q-15.90609 22.314-31.80419 44.61144-28.22295 39.5906-56.43787 79.17284c-1.19643 1.675-2.39282 3.35827-3.58925 5.03331-.49178.68826-.98356 1.37652-1.46687 2.06469z" fill="#fff"></path><path d="m714.68823 729.11829c.11127 3.67467.35448 7.29079.67212 10.87342q.09225 1.02775.18489 2.05546l2.28771-.01278c-.07-.68508-.13993-1.3702-.20143-2.05537-.48341-5.17575-.8264-10.41-.873-15.78645a220.22989 220.22989 0 0 1 4.33558-44.39187 276.39733 276.39733 0 0 1 13.42783-46.11929 316.72374 316.72374 0 0 1 21.9699-45.63021 1.21872 1.21872 0 0 0 .20194-.8105c-.09438-.652-.9625-.84532-1.61151-.22227a1.89383 1.89383 0 0 0 -.328.41479q-1.583 2.72194-3.10817 5.46011a316.50458 316.50458 0 0 0 -21.02777 45.79008 275.09009 275.09009 0 0 0 -12.51841 46.18859 217.271 217.271 0 0 0 -3.41168 44.24629z" fill="#fff"></path><path d="m491.811 512.35768a2.49989 2.49989 0 0 1 1.36211-4.40965 41.28894 41.28894 0 0 1 16.19271 1.6597l53.31537 16.46563a5.5 5.5 0 0 1 -3.24591 10.51019l-53.31537-16.46563a41.29214 41.29214 0 0 1 -14.30891-7.76024z" fill="#3f3d56"></path><path d="m710.358 580.75721a10.74268 10.74268 0 0 1 -4.868-15.7369l-9.1385-47.79161 23.29142-1.81583 1.40592 46.74693a10.80091 10.80091 0 0 1 -10.69084 18.59741z" fill="#ffb8b8"></path><path d="m694.91408 556.09185-23.7229-110.48243a17.49974 17.49974 0 1 1 34.21973-7.34668l23.72314 110.48145a4.50561 4.50561 0 0 1 -3.45483 5.34473l-25.42066 5.458a4.4984 4.4984 0 0 1 -5.34448-3.45507z" fill="#4FB96E"></path></g><path d="m373.17 572.064h-12.259l-5.833-47.288 18.095.001z" fill="#ffb8b8"></path><path d="m352.15353 568.56068h23.64387a0 0 0 0 1 0 0v14.88687a0 0 0 0 1 0 0h-38.53073a0 0 0 0 1 0 0 14.88686 14.88686 0 0 1 14.88686-14.88687z" fill="#2f2e41"></path><path d="m414.17 571.064h-12.259l-5.833-47.288 18.095.001z" fill="#ffb8b8"></path><path d="m393.15353 567.56068h23.64387a0 0 0 0 1 0 0v14.88687a0 0 0 0 1 0 0h-38.53073a0 0 0 0 1 0 0 14.88686 14.88686 0 0 1 14.88686-14.88687z" fill="#2f2e41"></path><path d="m641.28786 721.06841a4.46919 4.46919 0 0 1 -1.61621-3.0625l-14.25265-156.7793a4.50075 4.50075 0 0 1 4.313-4.9043l71.47974-2.68066a4.50154 4.50154 0 0 1 4.66577 4.66211l-5.71387 156.17676a4.50841 4.50841 0 0 1 -4.0896 4.3164l-14.41284 1.31055a4.49951 4.49951 0 0 1 -4.89722-4.18262l-6.6145-99.21679a1.43593 1.43593 0 0 0 -1.49585-1.39942h-.0061a1.43661 1.43661 0 0 0 -1.49243 1.41114l-5.91919 99.88574a4.4791 4.4791 0 0 1 -4.04419 4.21094l-12.59082 1.25976a4.46991 4.46991 0 0 1 -3.313-1.00781z" fill="#2f2e41" transform="translate(-282.80629 -157.82514)"></path><circle cx="385.97692" cy="218.96246" fill="#ffb8b8" r="24.56103"></circle><path d="m621.48513 562.28814a4.46183 4.46183 0 0 1 -1.05274-3.67872c4.53442-27.56152 1.97876-68.07421-.96387-97.207a44.20088 44.20088 0 0 1 18.24121-40.30175l12.82691-10.99415a4.56971 4.56971 0 0 1 3.05737-1.082l31.866.91016a4.48315 4.48315 0 0 1 3.05347 1.31738l4.92407 10.9043.05078.03711a44.07016 44.07016 0 0 1 17.915 37.69043l-4.69043 96.93652a4.52415 4.52415 0 0 1 -4.34693 4.28028l-77.34741 2.71777c-.05.001-.09961.002-.14941.002a4.48933 4.48933 0 0 1 -3.38402-1.53233z" fill="#4FB96E" transform="translate(-282.80629 -157.82514)"></path><path d="m528.70914 521.83713a10.74267 10.74267 0 0 1 12.366-10.8825l39.86511-27.89846 11.18962 20.508-42.07677 20.41562a10.80091 10.80091 0 0 1 -21.344-2.1427z" fill="#ffb8b8" transform="translate(-282.80629 -157.82514)"></path><path d="m562.25783 526.68657a4.47327 4.47327 0 0 1 -2.94531-1.78515l-15.38452-20.96a4.50641 4.50641 0 0 1 .96484-6.291l91.09473-66.86328a17.50025 17.50025 0 0 1 20.71 28.21582l-91.09477 66.8633a4.46888 4.46888 0 0 1 -2.65283.87305 4.60231 4.60231 0 0 1 -.69214-.05274z" fill="#4FB96E" transform="translate(-282.80629 -157.82514)"></path><path d="m670.04044 398.652c3.25719-3.99362 2.90059-10.07682.2864-14.518s-7.05192-7.49993-11.61815-9.889-9.4171-4.26785-13.71433-7.11253-4.10985-14.88746-5.25405-19.91231l2.729.909c-1.04887-1.34182-1.38528-5.30676-2.43415-6.64858 3.08365.30468 5.45485 3.23246 8.53849 3.53714l-1.77942-4.77642c10.57439-.65193 17.14878 6.69613 27.72317 6.0442 5.23921-.323 10.929-.52738 15.23606 2.47312 3.74278 2.60741 5.63743 7.12028 6.88058 11.50907 2.66917 9.42319 3.084 19.97876-1.52619 28.61978s-15.23665 14.46378-24.52024 11.34355z" fill="#2f2e41" transform="translate(-282.80629 -157.82514)"></path><path d="m535.19371 741.82514h381a1 1 0 0 0 0-2h-381a1 1 0 0 0 0 2z" fill="#3f3d56" transform="translate(-282.80629 -157.82514)"></path></svg>                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="card-1-title" > Pengajuan Surat </p>
                                        <p class="card-1-body" > Kalabbirang menyediakan layanan pengajuan surat yang harus dilengkapi dengan beberapa dokumen </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4 ms-4 me-4">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <svg height="69.35" viewBox="0 0 760.55351 493.87026" width="82.52" xmlns="http://www.w3.org/2000/svg"><path d="m980.27676 434.93513a77.99644 77.99644 0 0 1 -72 77.77c-.66016.05-1.33008.1-2 .13v-74.03a4.95928 4.95928 0 0 0 -1.83985-3.86 1.2473 1.2473 0 0 0 -.22021-.18 1.86108 1.86108 0 0 0 -.23-.16 5.00053 5.00053 0 0 0 -4.77-.35l-.83008-1.82a7.00682 7.00682 0 0 1 2.89014-.63l-56.96-49.07c.43994-.5.8999-.99 1.35986-1.48a78.00688 78.00688 0 0 1 134.6001 53.68z" fill="#f2f2f2" transform="translate(-219.72324 -203.06487)"></path><path d="m239.50094 488.121a10.08716 10.08716 0 0 1 9.73047-12.02335l44.96213-53.52339 11.225 14.35185-45.82271 49.8125a10.14185 10.14185 0 0 1 -20.09484 1.38239z" fill="#ffb8b8" transform="translate(-219.72324 -203.06487)"></path><path d="m453.01 422.24334a10.52678 10.52678 0 0 0 -.83241 1.43331l-49.09421 7.01769-7.45492-9.4646-15.75426 9.38387 14.809 23.08909 59.87528-17.65021a10.49579 10.49579 0 1 0 -1.54848-13.80915z" fill="#ffb8b8" transform="translate(-219.72324 -203.06487)"></path><path d="m149.426 398.009 8.688 8.65 37.5-29.392-12.822-12.767z" fill="#ffb8b8"></path><path d="m358.89408 608.16256h38.53071a0 0 0 0 1 0 0v14.88687a0 0 0 0 1 0 0h-23.64379a14.8869 14.8869 0 0 1 -14.8869-14.8869 0 0 0 0 1 -.00002.00003z" fill="#2f2e41" transform="matrix(-.70862511 -.70558519 .70558519 -.70862511 -7.95298 1115.59869)"></path><path d="m103.246 480.98h12.26l5.832-47.288h-18.094z" fill="#ffb8b8"></path><path d="m320.34206 680.54149h38.53072a0 0 0 0 1 0 0v14.88687a0 0 0 0 1 0 0h-23.64384a14.88688 14.88688 0 0 1 -14.88688-14.88688 0 0 0 0 1 0 .00001z" fill="#2f2e41" transform="matrix(-1 .00004573 -.00004573 -1 459.52299 1172.88947)"></path><path d="m320.30408 647.52195-13.96447-102.9868a128.9498 128.9498 0 0 1 2.00122-46.71645c2.86561-12.31181 6.73692-20.84015 11.50674-25.34671a4.71831 4.71831 0 0 1 2.74314-1.25267l46.10641-4.80292a4.70612 4.70612 0 0 1 4.51012 2.25379l1.51568 2.52571a4.698 4.698 0 0 1 .44225.97362l9.74817 30.2199a3.61643 3.61643 0 0 0 1.80848 2.12649c15.348 7.8358 65.20326 34.28751 62.35013 45.7-2.68077 10.72306-27.77924 28.10971-35.40779 33.18252a4.66064 4.66064 0 0 1 -5.24009-.03972l-12.66317-8.66371a4.69345 4.69345 0 0 1 -.13367-7.65147l8.73254-6.43445a3.65083 3.65083 0 0 0 -.95682-6.38353l-46.89849-16.4558a3.64989 3.64989 0 0 0 -4.84646 3.14695l-8.64724 105.68767a4.70514 4.70514 0 0 1 -4.4429 4.30389l-13.37939.66911c-.08147.00407-.16218.00611-.24289.00611a4.66262 4.66262 0 0 1 -4.6415-4.06153z" fill="#2f2e41" transform="translate(-219.72324 -203.06487)"></path><circle cx="121.72635" cy="153.52379" fill="#ffb8b8" r="24.56103"></circle><g transform="translate(-219.72324 -203.06487)"><path d="m318.477 468.26486-18.07918-65.9648.3096-.20877c.38828-.26174 39.3565-25.99342 84.98043-5.25715l.82722.47459-10.71287 68.46708a6.78561 6.78561 0 0 1 -6.44437 5.77654l-44.08283 1.69565c-.08886.003-.17746.00509-.26555.00509a6.7513 6.7513 0 0 1 -6.53245-4.98823z" fill="#ccc"></path><path d="m299.70988 445.24424-15.05725-17.31536a4.68627 4.68627 0 0 1 -.10643-6.03217l15.74062-19.4449 12.08343 3.29564 6.40618 22.42178-11.68064 16.687a4.66526 4.66526 0 0 1 -3.59888 1.99511c-.08427.00407-.168.00611-.2518.00611a4.66009 4.66009 0 0 1 -3.53523-1.61321z" fill="#ccc"></path><path d="m382.97476 441.637a4.6652 4.6652 0 0 1 -3.59888-1.99511l-11.68064-16.687 5.61837-23.60242 11.12547-3.03437 2.076.99066 15.41039 19.37362a4.68626 4.68626 0 0 1 -.10643 6.03216l-15.05725 17.31537a4.66011 4.66011 0 0 1 -3.53523 1.61319c-.08351-.00003-.16778-.0021-.2518-.0061z" fill="#ccc"></path><path d="m906.27676 433.9051a.9803.9803 0 0 1 -.24024.68006.99982.99982 0 0 1 -1.40967.11l-3.35009-2.89-56.96-49.07-159.75976-137.65a5.01961 5.01961 0 0 0 -6.54.01l-215.14014 186.91-1.93994 1.68a.96621.96621 0 0 1 -.25.16 1 1 0 0 1 -.51025.08 1.02484 1.02484 0 0 1 -.6499-.33.99744.99744 0 0 1 .08984-1.41l.27-.24 216.82031-188.36a7.0466 7.0466 0 0 1 9.15967-.02l159.81006 137.69 60.25 51.92a1.01574 1.01574 0 0 1 .35011.72994z" fill="#3f3d56"></path><path d="m784.807 463.43513-2.63037-7.24-9.06006-25-19.52-53.83-21.81982-60.17-39.3501-108.53a8.51614 8.51614 0 0 0 -10.89014-5.09l-227.50976 82.49a8.51217 8.51217 0 0 0 -5.08985 10.89l55.79 153.86.94971 2.63 58.56006 26.54 16.46 7.46 2.66992 1.21 69.69043 31.59 2.69971-.98 45.71-16.57 68.95019-25 9.29-3.37a8.51789 8.51789 0 0 0 5.10008-10.89z" fill="#e6e6e6"></path><path d="m689.40664 335.27516a12.52171 12.52171 0 0 0 -16.02-7.49005l-90.02 32.65-43.46973 15.76a12.49841 12.49841 0 1 0 8.52 23.5l34.94971-12.67 98.55029-35.73a12.52158 12.52158 0 0 0 7.48973-16.01995z" fill="#fff"></path><path d="m705.25674 378.99513a12.52187 12.52187 0 0 0 -16.02-7.49l-15.25 5.53-90.62012 32.86-27.61963 10.01a12.50311 12.50311 0 0 0 8.52 23.51l19.09961-6.93 114.40039-41.48c.25977-.09.50977-.2.75977-.31a12.49821 12.49821 0 0 0 6.72998-15.7z" fill="#fff"></path><path d="m721.27676 423.17512a12.5107 12.5107 0 0 0 -16.00977-7.49l-42.77 15.51-33.11035 12.01-46.02 16.68-11.59961 4.21a12.52729 12.52729 0 0 0 -8.13037 13.42 12.3647 12.3647 0 0 0 .6001 2.47l16.46 7.46 2.66992-.97h.02l83.51025-30.28 46.88965-17a12.51132 12.51132 0 0 0 7.49024-16.02z" fill="#fff"></path><path d="m627.54678 292.29512a12.52192 12.52192 0 0 0 -16.02-7.49l-51.7002 18.74a12.50311 12.50311 0 0 0 8.52 23.51l16.36035-5.93 10.82959-3.93 24.52051-8.89a12.51107 12.51107 0 0 0 7.48975-16.01z" fill="#fff"></path><path d="m833.8666 317.19514h-242a8.502 8.502 0 0 0 -7.15967 3.93 8.4141 8.4141 0 0 0 -1.34033 4.57v162.96l69.69043 31.59 9.81982 4.45 15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22 45.24023-20.51 48.90967-22.16v-134.33a8.50539 8.50539 0 0 0 -8.49996-8.5z" fill="#4FB96E"></path><path d="m783.8666 431.19514h-142a12.4967 12.4967 0 0 0 -12.48 12.01 4.01078 4.01078 0 0 0 -.02.49 12.51761 12.51761 0 0 0 12.5 12.5h142a12.5 12.5 0 0 0 0-25z" fill="#fff"></path><path d="m791.95693 480.67512a12.41094 12.41094 0 0 0 -8.09033-2.98h-142a12.5 12.5 0 0 0 0 25h106.3501l45.24023-20.51a12.58317 12.58317 0 0 0 -1.5-1.51z" fill="#fff"></path><path d="m662.87685 524.69514 15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03z" fill="#fff"></path><path d="m752.10683 377.9051a12.506 12.506 0 0 0 -11.74023-8.21h-55a12.50937 12.50937 0 0 0 -11.37988 7.34 12.35787 12.35787 0 0 0 -1.12012 5.16 12.51761 12.51761 0 0 0 12.5 12.5h55a12.49876 12.49876 0 0 0 11.74023-16.79z" fill="#fff"></path><path d="m743.3666 502.69514-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22zm0 0-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22zm0 0-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22zm162.91016-68.79a7.63845 7.63845 0 0 0 -1.21-.98 6.96066 6.96066 0 0 0 -6.68018-.49l-106.42969 48.24-48.59033 22.02-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21-11.97021-5.43-72.37012-32.79-.02-.00995-19.73-8.95-58.90967-26.7-40.56006-18.38a6.10738 6.10738 0 0 0 -1.29-.43 6.70854 6.70854 0 0 0 -2.99023-.06 7.017 7.017 0 0 0 -5.60986 6.86v251.13a7.00778 7.00778 0 0 0 7 7h440a7.00778 7.00778 0 0 0 7-7v-251.13a6.97174 6.97174 0 0 0 -2.00004-4.90009zm0 256.03a5.002 5.002 0 0 1 -5 5h-440a5.002 5.002 0 0 1 -5-5v-251.13a5.00087 5.00087 0 0 1 2.29-4.2 5.1681 5.1681 0 0 1 1.60986-.68 4.51064 4.51064 0 0 1 .51025-.08 3.89766 3.89766 0 0 1 .58985-.04 4.96993 4.96993 0 0 1 2.06.45l42.33985 19.19 58.56006 26.54 16.46 7.46 2.66992 1.21 69.69043 31.59 9.81982 4.45 15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22 45.24023-20.51 105.75977-47.93a5.00053 5.00053 0 0 1 4.77.35 1.86108 1.86108 0 0 1 .23.16 1.2473 1.2473 0 0 1 .22021.18 4.95928 4.95928 0 0 1 1.83985 3.86zm-162.91016-187.24-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22zm0 0-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22zm-162.66992-15.25 2.66992 1.21v-2.18zm162.66992 15.25-48.54 22-11.48975 5.21a5.0163 5.0163 0 0 1 -4.12011 0l-11.48975-5.21h-4.8501l15.50977 7.03a7.02024 7.02024 0 0 0 5.78027 0l15.50977-7.03 48.54-22z" fill="#3f3d56"></path><path d="m395.2492 696.93513h-113a1 1 0 0 1 0-2h113a1 1 0 1 1 0 2z" fill="#3f3d56"></path><path d="m332.11093 374.55038a10.70173 10.70173 0 0 1 .98975-19.52749c7.4115-2.86009 15.72028 2.97689 23.48923 1.31739 7.74334-1.654 12.22267-10.91139 10.3744-18.61068s-8.57535-13.49851-15.99322-16.26805a34.47953 34.47953 0 0 0 -29.74118 2.72614 31.75119 31.75119 0 0 0 -14.9446 25.63373 29.43748 29.43748 0 0 0 14.24362 25.79074c1.97455 1.13818 4.27292 2.052 6.49366 1.53951a18.10043 18.10043 0 0 0 5.08834-2.60129z" fill="#2f2e41"></path><path d="m324.15161 323.58907c-6.53544-8.66841-15.3577-15.78964-25.62357-19.32028s-21.99719-3.24718-31.6387 1.74227-16.8318 14.89868-17.58232 25.72874c-1.24911 18.02472 14.15247 33.34642 15.7331 51.3451a34.52622 34.52622 0 0 1 -45.31688 35.77324 36.35 36.35 0 0 0 28.01709 7.95123 33.78616 33.78616 0 0 0 24.04722-16.18126c3.46629-6.02251 4.88959-13.01822 5.44248-19.945a88.618 88.618 0 0 0 -3.46772-32.49333c-1.72753-5.74111-4.07041-11.64922-2.97488-17.54367a15.96592 15.96592 0 0 1 12.43543-12.45366c4.95332-.92812 10.01775.58363 14.74742 2.32344s9.49823 3.75319 14.53643 3.86838 10.5258-2.191 12.47287-6.8392z" fill="#2f2e41"></path></g></svg>                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="card-1-title" > Pengarsipan Surat </p>
                                        <p class="card-1-body" > Kalabbirang menyediakan layanan pengarsipan surat agar memudahkan warga </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="beranda-head-text text-center p-5">
            <p> <span style="font-weight: 600;" > Kalabbirang </span> adalah kelurahan di kecamatan lorem ipsum dolor sit amet consectetur. Eu ante mi non venenatis amet viverra euismod arcu enim. Faucibus quam neque at neque lacus. Aenean iaculis nulla sit amet augue consequat scelerisque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam dapibus efficitur lectus, eget fringilla eros suscipit id. Donec tristique mi at tellus mattis fermentum. </p>
        </div>
    </div>
    <hr>
    <div class="berita-section">
        <div class="berita-title">
            <p class="berita-section-title"> Berita </p>
        </div>
        <div class="berita-body mt-4 mb-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita1.png')}}" class="p-auto" alt="Snow" style="width:100%; height:217px">
                        <div class="bottom-left">
                        <p class="berita-img" >
                            <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita2.png')}}" alt="Snow" class="p-auto" style="width:100%; height:217px">
                        <div class="bottom-left">
                        <p class="berita-img" >
                            <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container-berita">
                        <img src="{{asset('image/berita3.png')}}" alt="Snow" class="p-auto" style="width:100%; height:217px">
                        <div class="bottom-left">
                        <p class="berita-img" >
                            <span class="judul-berita-img" > Judul berita </span> <br> Lorem Ipsum Dolor sit Amet
                        </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>

    <div class="footer">
        <img src="{{asset('image/Lambang_Kabupaten_Takalar.png')}}" width= "45px" height="55px" alt="Lambang_Kabupaten_Takalar">
    </div>
@endsection
