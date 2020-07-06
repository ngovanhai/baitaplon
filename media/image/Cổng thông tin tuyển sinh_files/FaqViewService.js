app.service("faqService", function ($http) {
    'use strict';
    
    // Get All Contents
    this.getFaqContent = function (PortalId, ModuleId, CateId, Status, txtKeyword, PageIndex, PageSize) {
        var response = $http({
            method: "get",
            url: baseUrl + "/faq/listcontent",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            params: {
                portalid: PortalId,
                moduleid: ModuleId,
                cateid: CateId,
                status: Status,
                txtKeyword: txtKeyword,
                pageindex: PageIndex,
                pagesize: PageSize
            }
        });
        return response;
    }

    // get By Id
    this.getItem = function (Id) {
        var response = $http({
            method: "get",
            url: baseUrl + "/faq/getbyid",
            params: {
                id: JSON.stringify(Id)
            }
        });
        return response;
    }

    // Get All Categories
    this.getFaqCategory = function (PortalId, ModuleId, Status, txtKeyword, PageIndex, PageSize) {
        var response = $http({
            method: "get",
            url: baseUrl + "/faq/listcategory",
            params: {
                PortalId: PortalId,
                ModuleId: ModuleId,
                Status: Status,
                txtKeyword: txtKeyword,
                pageindex: PageIndex,
                pagesize: PageSize
            }
        });
        return response;
    }
    // Update Content 
    this.UpdateItem = function (obj) {
        var response = $http({
            method: "post",
            url: baseUrl + "/faq/save",
            data: JSON.stringify(obj),
            dataType: "json"
        });
        return response;
    }//end
});