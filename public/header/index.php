
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tuyển sinh đại học thủy lợi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  
    <script src="https://use.fontawesome.com/cab277e3ef.js"></script>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/formQuestions.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    
  </head>
  </head>
  <body>
    <header class="header-page">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-md-7">
            <div class="header-brand">
              <a href="http://ts.tlu.edu.vn/">
                <img
                  src="http://localhost/baitaplon/media/image/logosp.png"
                  alt="Trường Đại học Thủy lợi"
                  class="d-none d-md-block"
                />
               
              </a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="header-right">
              <ul class="header-links">
                <li><a href="#">Đăng ký</a></li>
                <li>
                  <a
                    href="http://localhost/baitaplon/login/"
                    >Đăng nhập</a
                  >
                </li>
                <li><a href="http://ts.tlu.edu.vn/#">Liên hệ</a></li>
              </ul>
              <div id="dnn_searchPane">
                <div class="DnnModule DnnModule-CmsView DnnModule-1533">
                  <a name="1533"></a>
                  <div id="dnn_ctr1533_ContentPane">
                    <!-- Start_Module_1533 -->
                    <div
                      id="dnn_ctr1533_ModuleContent"
                      class="DNNModuleContent ModCmsViewC"
                    >

                      <div
                        class="header-search ng-scope"
                        ng-controller="myCntrl1533"
                      >
                        <div class="form-search">
                          <input
                            class="form-control"
                            type="text"
                            id="tbxHomekeyword"
                            placeholder="Tìm kiếm"
                          />
                          <input
                            type="button"
                            class="form-submit"
                            ng-click="formClick()"
                          />
                        </div>
                      </div>

                      <!--End Search-->

                      <!--Begin Document View-->

                      <!--End Document View-->
                      <!--Begin Hướng dẫn TTHC-->

                      <!--End Hướng dẫn TTHC-->

                      <!-- Thủ tục hành chính -->
                    </div>
                    <!-- End_Module_1533 -->
                  </div>
                </div>
              </div>

              <div class="languages">
                <a href="http://ts.tlu.edu.vn/#"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- ----------------------------------------------- -->
    
    <nav class="mainmenu" id="mainmenu">
      <ul class="menu clearfix" style="margin-left:13%">
        <li>
          <a href="http://localhost/baitaplon"
            ><i
              class="fa fa-home"
              aria-hidden="true"
              style="font-size: 130%;"
            ></i
          ></a>
        </li>
        <li><a href="http://www.tlu.edu.vn/">TLU</a></li>
        <!-- ngRepeat: item in AllItems --><!-- ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a
            class="nav-link ng-binding"
            ng-href="http://ts.tlu.edu.vn/tuyen-sinh-dai-hoc"
            href="http://localhost/baitaplon/page/tuyensinhdaihoc"
            >Tuyển sinh đại học</a
          >
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a
            class="nav-link ng-binding"
            ng-href="http://localhost/baitaplon/page/tuyensinhthacsi/"
            href="./../../../baitaplon/page/tuyensinhthacsi/"
            >Tuyển sinh thạc sĩ</a
          >
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a
            class="nav-link ng-binding"
            ng-href="http://ts.tlu.edu.vn/tin-tuyen-tien-si"
            href="./../../../baitaplon/page/tuyensinhtiensi/"
            >Tuyển sinh tiến sĩ</a
          >
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a class="nav-link ng-binding">Ngành đào tạo</a>
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
            <li ng-repeat="subitem in item.Children" class="ng-scope">
              <a
                class="ng-binding"
                href="http://localhost/baitaplon/page/nganhdaotao/nganhdaotaodaihoc.php"
                >Ngành đào tạo ĐẠI HỌC</a
              >
            </li>
            <!-- end ngRepeat: subitem in item.Children -->
            <li ng-repeat="subitem in item.Children" class="ng-scope">
              <a
                ng-href="http://ts.tlu.edu.vn/nganh-dao-tao-thac-si"
                class="ng-binding"
                href="http://localhost/baitaplon/page/nganhdaotao/nganhdaotaothacsi.php"
                >Ngành đào tạo THẠC SĨ</a
              >
            </li>
            <!-- end ngRepeat: subitem in item.Children -->
            <li ng-repeat="subitem in item.Children" class="ng-scope">
              <a
                ng-href="http://ts.tlu.edu.vn/nganh-dao-tao-tien-si"
                ng-bind-html="subitem.Name"
                class="ng-binding"
                href="http://localhost/baitaplon/page/nganhdaotao/nganhdaotaotiensi.php"
                >Ngành Đào tạo TIẾN SĨ</a
              >
            </li>
            <!-- end ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a
            class="nav-link ng-binding"
            ng-href="http://ts.tlu.edu.vn/hoi-dap"
            ng-bind-html="item.Name"
            href="http://localhost/baitaplon/page/hoidap"
            >Hỏi đáp</a
          >
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems --><!-- ngIf: $index>0 -->
        <li ng-repeat="item in AllItems" ng-if="$index&gt;0" class="ng-scope">
          <a class="nav-link ng-binding">Đăng ký xét tuyển đại học</a>
          <ul class="sub-menu">
            <!-- ngRepeat: subitem in item.Children -->
          </ul>
        </li>
        <!-- end ngIf: $index>0 --><!-- end ngRepeat: item in AllItems -->
      </ul>
    </nav>
  </body>
</html>
