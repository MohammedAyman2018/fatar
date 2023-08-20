<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فطرني</title>
    <!-- Favicon-->

    <!-- Bootstrap icons-->

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->

    <!-- Header-->
    <form action="process.php" method="POST">
        <header class="bg-success py-1">
            <div class="container px-8 px-lg-1 my-1">
                <div class="text-center text-white">
                    <h1 class="fw-bold my-3">فطرنى</h1>

                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control rounded-1" aria-label="الاسم"
                            aria-describedby="inputGroup-sizing-default" id="name_" placeholder="اسم صاحب الطلب" name="name_"
                            required>
                    </div>

                </div>
            </div>
        </header>


        <datalist id="foodList">
            <option value="فول">فول</option>
            <option value="فول بسطرمة">فول بسطرمة</option>
            <option value="فول معصفر">فول معصفر</option>
            <option value="فول سلطة">فول سلطة</option>
            <option value="فول طحينة">فول طحينة</option>
            <option value="فول سلطة<">فول سلطة وطحينة</option>
            <option value="فول زيت زيتون">فول زيت زيتون</option>
            <option value="فول بيض اومليت">فول بيض اومليت</option>
            <option value="فلافل">فلافل</option>
            <option value="فلافل سلطة">فلافل سلطة</option>
            <option value="فلافل سلطة وطحينة">فلافل سلطة وطحينة</option>
            <option value="فلال طحينة">فلال طحينة</option>
            <option value="فلال لبنة">فلال لبنة</option>
            <option value="باكت فلافل">باكت فلافل</option>
            <option value="بابا غنوج">بابا غنوج</option>
            <option value="جبنة قريش">جبنة قريش</option>
            <option value="بطاطس كاتشب ومايونيز">بطاطس كاتشب ومايونيز</option>
            <option value="بطاطس زيادة توابل">بطاطس زيادة توابل</option>
            <option value="بطاطس سلطة<">بطاطس سلطة</option>
            <option value="بيض بسطرمة">بيض بسطرمة</option>
            <option value="بيض اومليت"> بيض اومليت</option>
            <option value="فلافل محشية"> فلافل محشية</option>
            <option value="مسقعة"> مسقعة</option>
            <option value="جبنة بالطماطم"> جبنة بالطماطم</option>
            <option value="بطاطس شيدر"> بطاطس شيدر</option>
            <option value="فول زبده"> فول زبده</option>
            <option value="جبنةزعتر"> جبنةزعتر</option>
            <option value="اومليت شيدر">اومليت شيدر</option>
            <option value="اومليت كيرى">اومليت كيرى</option>
            <option value="فلافل شرائح طماطم">فلافل شرائح طماطم</option>
            <option value="جبنة قريش بالفلفل">جبنة قريش بالفلفل</option>
            <option value="اومليت خضار">اومليت خضار</option>
            <option value="فلافل لبنة طماطم وجرجير">فلافل لبنة طماطم وجرجير</option>
            <option value="اومليت جبنة رومى">اومليت جبنة رومى</option>
            <option value="فلافل بابا غنوج">فلافل بابا غنوج </option>
            <option value="فلافل محشية بدون سلطة"> فلافل محشية بدون سلطة</option>
            <option value="بطاطس مهروسة">بطاطس مهروسة</option>
            <option value="جبنة طماطم ونعناع">جبنة طماطم ونعناع</option>
            <option value="فول زبدةطماطم وجرجير">فول زبدةطماطم وجرجير</option>
            <option value="بيبسى">بيبسى</option>
            <option value="بطاطس طحينة">بطاطس طحينة</option>
            <option value="فلافل بايتس">فلافل بايتس</option>
            <option value="بيض مسلوق<">بيض مسلوق</option>
            <option value="فلافل على بابا غنوج<">فلافل على بابا غنوج</option>

        </datalist>

        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الاول</h5>
                                    <!-- Product price-->
                                    <label for="sand1"></label>
                                    <input class="form-control" list="foodList" name="sand1"
                                        placeholder="ابحث باسم الساندوتش..." required>

                                    <label for="count_food1"></label>
                                    <input type="number" class="form-control" id="count_food1" placeholder="العدد"
                                        name="count_food1" required>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الثانى</h5>
                                    <!-- Product reviews-->


                                    <!-- Product price-->
                                    <label for="sand2"></label>
                                    <input class="form-control" list="foodList" name="sand2"
                                        placeholder="ابحث باسم الساندوتش...">

                                    <label for="count_food2"></label>
                                    <input type="number" class="form-control" id="count_food2" placeholder="العدد"
                                        name="count_food2">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الثالث</h5>
                                    <!-- Product price-->

                                    <label for="sand3"></label>
                                    <input class="form-control" list="foodList" name="sand3"
                                        placeholder="ابحث باسم الساندوتش...">


                                    <label for="count_food3"></label>
                                    <input type="number" class="form-control" id="count_food3" placeholder="العدد"
                                        name="count_food3">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الرابع</h5>

                                    <!-- Product price-->
                                    <label for="sand4"></label>
                                    <input class="form-control" list="foodList" name="sand4"
                                        placeholder="ابحث باسم الساندوتش...">


                                    <label for="count_food4"></label>
                                    <input type="number" class="form-control" id="count_food4" placeholder="العدد"
                                        name="count_food4">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الخامس</h5>
                                    <!-- Product price-->
                                    <label for="sand5"></label>
                                    <input class="form-control" list="foodList" name="sand5"
                                        placeholder="ابحث باسم الساندوتش...">


                                    <label for="count_food5"></label>
                                    <input type="number" class="form-control" id="count_food5" placeholder="العدد"
                                        name="count_food5">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش السادس</h5>
                                    <!-- Product price-->
                                    <label for="sand6"></label>
                                    <input class="form-control" list="foodList" name="sand6"
                                        placeholder="ابحث باسم الساندوتش...">


                                    <label for="count_food6"></label>
                                    <input type="number" class="form-control" id="count_food6" placeholder="العدد"
                                        name="count_food6">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش السابع</h5>
                                    <!-- Product price-->
                                    <label for="sand7"></label>
                                    <input class="form-control" list="foodList" name="sand7"
                                        placeholder="ابحث باسم الساندوتش...">


                                    <label for="count_food7"></label>
                                    <input type="number" class="form-control" id="count_food7" placeholder="العدد"
                                        name="count_food7">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-5">
                        <div class="card h-100">
                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center mb-3">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">الساندوتش الثامن</h5>
                                    <!-- Product reviews-->
                                    <label for="sand8"></label>
                                    <input class="form-control" list="foodList" name="sand8"
                                        placeholder="ابحث باسم الساندوتش...">

                                    <label for="count_food8"></label>
                                    <input type="number" class="form-control" id="count_food8" placeholder="العدد"
                                        name="count_food8">

                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                <form class="d-flex d-md-inline">
                    <button class="btn btn-dark submit-btn" type="submit">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg>
                        </span>

                        <span>
                            ألف هنا
                        </span>

                    </button>
                </form>
            </div>
        </section>
        <br>
        <br>
    </form>
    <!-- Footer-->
    <footer class="py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Ibrahim Emara- Mohammed Farouk</p>
        </div>
    </footer>

</body>

</html>