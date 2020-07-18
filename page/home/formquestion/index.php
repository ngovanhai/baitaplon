

<link rel="stylesheet" href="./form.css">
<div class="title typescale-4 text-center">Đặt câu hỏi mới</div>
<div class="qa-form">
  <form
    class="forms ng-pristine ng-invalid ng-invalid-required"
    action="http://ts.tlu.edu.vn/"
    method="POST"
  >
    <div class="form-group">
      <label class="required">Họ tên</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        ng-model="qa.PostUser"
        id="PostUser"
      />
    </div>
    <div class="form-group">
      <label class="required">Địa chỉ</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostUserAddress"
      />
    </div>
    <div class="form-group">
      <label class="required">Email</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        ng-model="qa.PostUserMail"
        id="PostUserMail"
      />
    </div>
    <div class="form-group">
      <label class="required">Ngành tuyển sinh</label>
      <select
        ng-model="mdlCate"
        ng-change="CateChanged(mdlCate)"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="mdlCate"
        data-ng-options="item as item.CateName for item in FaqCategories"
        ><option value="" class="" selected="selected"
          >--- Lĩnh vực ---</option
        ><option label="Kỹ thuật cơ điện tử" value="object:63"
          >Kỹ thuật cơ điện tử</option
        ><option label="Kỹ thuật ô tô" value="object:64"
          >Kỹ thuật ô tô</option
        ><option
          label="Chương trình tiên tiến ngành Kỹ thuật xây dựng"
          value="object:65"
          >Chương trình tiên tiến ngành Kỹ thuật xây dựng</option
        ><option
          label="Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước"
          value="object:66"
          >Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước</option
        ><option
          label="Kỹ thuật điều khiển và tự động hóa"
          value="object:67"
          >Kỹ thuật điều khiển và tự động hóa</option
        ><option label="Quản lý xây dựng" value="object:68"
          >Quản lý xây dựng</option
        ><option label="Kinh tế" value="object:69">Kinh tế</option
        ><option label="Kỹ thuật điện" value="object:70"
          >Kỹ thuật điện</option
        ><option label="Thủy văn học" value="object:71"
          >Thủy văn học</option
        ><option label="Kỹ thuật cơ sở hạ tầng" value="object:72"
          >Kỹ thuật cơ sở hạ tầng</option
        ><option label="Nhóm ngành Kỹ thuật Cơ khí" value="object:73"
          >Nhóm ngành Kỹ thuật Cơ khí</option
        ><option label="Nhóm ngành Công nghệ thông tin" value="object:74"
          >Nhóm ngành Công nghệ thông tin</option
        ><option label="Công nghệ sinh học" value="object:75"
          >Công nghệ sinh học</option
        ><option label="Kỹ thuật hóa học" value="object:76"
          >Kỹ thuật hóa học</option
        ><option label="Kỹ thuật môi trường" value="object:77"
          >Kỹ thuật môi trường</option
        ><option label="Kỹ thuật cấp thoát nước" value="object:78"
          >Kỹ thuật cấp thoát nước</option
        ><option label="Kỹ thuật tài nguyên nước" value="object:79"
          >Kỹ thuật tài nguyên nước</option
        ><option
          label="Kỹ thuật xây dựng công trình giao thông"
          value="object:80"
          >Kỹ thuật xây dựng công trình giao thông</option
        ><option label="Công nghệ kỹ thuật xây dựng" value="object:81"
          >Công nghệ kỹ thuật xây dựng</option
        ><option label="Kỹ thuật xây dựng" value="object:82"
          >Kỹ thuật xây dựng</option
        ><option
          label="Kỹ thuật xây dựng công trình thủy"
          value="object:83"
          >Kỹ thuật xây dựng công trình thủy</option
        ></select
      >
    </div>
    <div class="form-group">
      <label class="required">Tiêu đề hỏi</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        ng-model="qa.PostTitle"
        id="PostTitle"
      />
    </div>
    <div class="form-group">
      <label class="required">Câu hỏi</label>
      <textarea
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        cols="10"
        rows="4"
        ng-model="qa.PostContent"
        id="PostContent"
      ></textarea>
    </div>
    <table align="center">
      <tbody>
       
        </tr>
        <tr></tr>
      </tbody>
    </table>
    <div style="margin-top: 3px; text-align: center;">
      <button
        type="button"
        class="btn btn-outline-dark2"
        ng-click="SendQA()"
        style="width: 150px; margin-right: 12px;"
      >
        Gửi câu hỏi
      </button>
    </div>
  </form>
</div>
</div>