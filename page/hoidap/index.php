<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hỏi đáp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="./../../css/header.css" />
    <link rel="stylesheet" href="./../../css/footer.css" />
    
</head>
<style>
   label.error{
    color : red;
    font-size : 12px;
}
</style>
<body>
    <?php
      include("../../../baitaplon/public/header/index.php");
      ?>
 <div class="container">
        <form action="" method="post" id="question">
            <div class="form-question form-custom section-library-bgimg"
                style="margin-bottom:30px;padding-bottom:20px;padding-top:20px">
                <p class="divHead hidden ng-binding"></p>
                <div class="form-question-row">
                    <div class="title-viewdetail"><a><i class="fa fa-paper-plane" aria-hidden="true"></i> GỬI CÂU HỎI
                        </a> (<span style="color:Red;font-size:13px">Những mục (*) là bắt buộc phải nhập</span>)</div>
                    <div class="row form-question-row-main">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Họ tên</label><span style="color:Red;">(*)</span>
                                <input type="text"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                    name="PostUser" id="PostUser" required>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Ngành tuyển sinh</label><span style="color:Red;">(*)</span>
                                <select
                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                    data-ng-options="c as c.CateName for c in FaqCategories"
                                    name="select">
                                    <option value="" class="" selected="selected">--- Lĩnh vực ---</option>
                                    <option label="Kỹ thuật cơ điện tử" value="object:10">Kỹ thuật cơ điện tử</option>
                                    <option label="Kỹ thuật ô tô" value="object:11">Kỹ thuật ô tô</option>
                                    <option label="Chương trình tiên tiến ngành Kỹ thuật xây dựng" value="object:12">
                                        Chương trình tiên tiến ngành Kỹ thuật xây dựng</option>
                                    <option label="Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước"
                                        value="object:13">Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước</option>
                                    <option label="Kỹ thuật điều khiển và tự động hóa" value="object:14">Kỹ thuật điều
                                        khiển và tự động hóa</option>
                                    <option label="Quản lý xây dựng" value="object:15">Quản lý xây dựng</option>
                                    <option label="Kinh tế" value="object:16">Kinh tế</option>
                                    <option label="Kỹ thuật điện" value="object:17">Kỹ thuật điện</option>
                                    <option label="Thủy văn học" value="object:18">Thủy văn học</option>
                                    <option label="Kỹ thuật cơ sở hạ tầng" value="object:19">Kỹ thuật cơ sở hạ tầng
                                    </option>
                                    <option label="Nhóm ngành Kỹ thuật Cơ khí" value="object:20">Nhóm ngành Kỹ thuật Cơ
                                        khí</option>
                                    <option label="Nhóm ngành Công nghệ thông tin" value="object:21">Nhóm ngành Công
                                        nghệ thông tin</option>
                                    <option label="Công nghệ sinh học" value="object:22">Công nghệ sinh học</option>
                                    <option label="Kỹ thuật hóa học" value="object:23">Kỹ thuật hóa học</option>
                                    <option label="Kỹ thuật môi trường" value="object:24">Kỹ thuật môi trường</option>
                                    <option label="Kỹ thuật cấp thoát nước" value="object:25">Kỹ thuật cấp thoát nước
                                    </option>
                                    <option label="Kỹ thuật tài nguyên nước" value="object:26">Kỹ thuật tài nguyên nước
                                    </option>
                                    <option label="Kỹ thuật xây dựng công trình giao thông" value="object:27">Kỹ thuật
                                        xây dựng công trình giao thông</option>
                                    <option label="Công nghệ kỹ thuật xây dựng" value="object:28">Công nghệ kỹ thuật xây
                                        dựng</option>
                                    <option label="Kỹ thuật xây dựng" value="object:29">Kỹ thuật xây dựng</option>
                                    <option label="Kỹ thuật xây dựng công trình thủy" value="object:30">Kỹ thuật xây
                                        dựng công trình thủy</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label>Tiêu đề hỏi</label><span style="color:Red;">(*)</span>
                                <input type="text"
                                    class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                    name="PostTitle"  id="PostTitle" required>
                            </div>
                        </div>
                    </div>

                    <div class="row form-question-row-main">
                        <div class="col-12 col-lg-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Số điện thoại</label><span style="color:Red;">(*)</span>
                                        <input type="text"
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            name="PostUserTel"  id="PostUserTel" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <div class="form-group">
                                        <label>Email</label><span style="color:Red;">(*)</span>
                                        <input type="text"
                                            class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                            name="PostUserMail"  id="PostUserMail" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="form-group">
                                <label>Nội dung câu hỏi</label>

                                <textarea class="form-control ng-pristine ng-untouched ng-valid ng-empty" rows="4"
                                    cols="7" style="min-height:122px" name="PostContent"
                                    id="PostContent" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:30px 0px;">
                        <table style="width:100%" class="table-submit">
                            <tbody>
                                <tr>
                                    <td style="text-align:center">
                                        <button type="submit" class="btn btn btn-primary btn-custom">Gửi câu
                                            hỏi</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </form>
    </div>
  
    <?php
      include("../../../baitaplon/public/footer/index.php");
      ?>
    </div>
<script src="./../../../baitaplon/js/sendmail.js"></script>
</body>

</html>