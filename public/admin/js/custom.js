$(function () {
    // image preview
    $(".custom-file-input").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            var input = $(this);
            reader.onload = function (e) {
                $('#' + input[0].id + '').nextAll(":eq(1)").show().find('img').attr('src', e.target.result);
                $('#' + input[0].id + '').hide().next().hide();
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    // dropdown item change display button text
    $(".dropdown-item ").click(function () {
        $(this).closest('ul').parent().find('.btn:first-child').text($(this).text());
        $(this).closest('ul').parent().find('.btn:first-child').val($(this).data('value'));
    });
    // filter dropdown lists {search}
    $(".filter").on('keyup', function () {
        var input, filter, list, i;
        input = $(this);
        filter = $(this).val().toUpperCase();
        list = $(this).parents(':eq(1)').find('li');
        for (i = 0; i < list.length; i++) {
            if (list) {
                if (list[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    list[i].style.display = "";
                } else {
                    list[i].style.display = "none";
                }
            }
        }
    });
    // api get managers with categories
    $('.apiManager').on('change', function () {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            url: '/api/categories?withManager&manager=' + id,
            success: function (data) {
                $('.apiCategory').empty();
                $('.apiCategory').append("<option value='' selected disabled>Не выбран</option>");
                $.each(data.data, function (index, dataObj) {
                    $('.apiCategory').append("<option value="+dataObj.id+" disabled>"+dataObj.name+"</option>");
                    if (dataObj.children.length > 0) {
                        $.each(dataObj.children, function (index, childObj) {
                            $('.apiCategory').append("<option value="+childObj.id+">"+"&nbsp;&nbsp;"+childObj.name+"</option>");
                        });
                    }
                });
                $('.apiCategory').prop('disabled',false);
            },
            error: function (data) {
                console.log('error');
            }
        });
    });

    // image close button {image Preview}
    $('.custom-image-close').on('click', function () {
        $(this).parent().hide().prev().show();
        $(this).parents(':eq(1)').show().find('input').val('');
    });

    // manager-actions
    $('.manager_action').on('click', function (e) {
    e.preventDefault(e);
        var id = $(this).closest('tr').data('id');
        var logo = $(this).closest('tr').data('logo');
        var name = $(this).closest('tr').data('name');
        var category = $(this).closest('tr').data('category');
        var status = $(this).closest('tr').data('status');
        $('#image_show').attr('src', "/storage/logos/" + logo);
        $('#image_show').parent().show().prevAll().hide();
        $('#edit_name').val(name);
        $("#edit_managerCatId").val(category);
        $('#manager_id').val(id);
        $('#edit_status').val(status);
        $('.deleteManager').attr('data-id',id);
    });
// delete manager via ajax
    $(".deleteManager").click(function(){
        var id = $(this).data('id');
        $result = confirm("Are  you sure?");
        if($result){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/admin/managers/delete',
            type: 'post',
            data:{id:id},
            success: function(result) {
                location.reload();
            }
        });
        }
    });

    // manager-group-actions
    $('.managergr_action').on('click', function (e) {
        e.preventDefault(e);
            var id = $(this).closest('tr').data('id');
            var name_ru = $(this).closest('tr').data('nameru');
            var name_uz = $(this).closest('tr').data('nameuz');
            $('#name_ru').val(name_ru);
            $('#name_uz').val(name_uz);
            $('#editManagerGr').val(id);
    });
    // employee-group-actions
    $('.editEmployeGroup a').on('click', function (e) {
        e.preventDefault(e);
        var id = $(this).attr('data');
        var uri = $(this).attr('href');
        $('.modal-loader').css('display', 'block');
        $.ajax({
            type: "GET",
            url: uri,
            data: id,
            dataType: 'json',
            success: function (data) {
                $('.employeeGrId').val(data.role.id);
                $('.employeeGrName').val(data.role.name);
                $(".edit_managerCatId").val(data.role.manager_id);
                $('.userPermissions').empty();
                $.each(data.permission, function (index, userPermission) {
                    $('.userPermissions').append('<div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="customCheckedit' + userPermission.id + '" name="permission[]" value="' + userPermission.id + '" ' + checkboxActive(userPermission.id) + '><label class="custom-control-label" for="customCheckedit' + userPermission.id + '">' + userPermission.name + '</label></div>');
                });

                function checkboxActive(value) {
                    for (var i = 12 - 1; i >= 0; i--) {
                        if (data.rolePermissions[i] == value)
                            return 'checked';
                    }
                }
                $('.modal-loader').css('display', 'none');
            },
            error: function (data) {
                console.log('error');
            }
        })
    });
    //employeer-actions
    $('.employee_actions a').on('click', function (e) {
        e.preventDefault(e);
        $(this).closest('tr').each(function () {
            var id = $(this).children('td:first').text();
            var name = $(this).children('td:eq(1)').text();
            var mname = $(this).children('td:eq(2)').attr('data-mname');
            var grname = $(this).children('td:eq(3)').attr('data-rname');
            var mobile = $(this).children('td:eq(4)').attr('data-mobile');
            var status = $(this).children('td:eq(5)').attr('data-status');
            $('.employee_name').val(name);
            $('.employee_id').val(id);
            $('.manager_id').val(mname);
            $('.role_id').val(grname);
            $('.mobile').val(mobile);
            $('.status').val(status);
        });
    });
    // edit branches
    $('.branchs_action').on('click', function (e) {
        e.preventDefault(e);
        var arr = [];
        var uri = $(this).attr('href');
        $('.modal-loader').css('display', 'block');
        $.ajax({
            type: "GET",
            url: uri,
            dataType: 'json',
            success: function (data) {
                $('#branchId').val(data.branch.id);
                $('#editBranchName').val(data.branch.name);
                $("#editManagerName").val(data.branch.manager_id);
                $("#editRegionName").val(data.branch.region_id);
                $("#editAddress").val(data.branch.address);
                $('.branCheckbox').find('.custom-control-input').each(function () {
                    var input = $(this);
                    checkboxActive(input);
                });

                function checkboxActive(input) {
                    arr = input.val();
                    // console.log(typeof(arr));
                    // for (var i = arr.length - 1; i >= 0; i--) {
                    // not finished
                    // }
                }
                $('.modal-loader').css('display', 'none');
            },
            error: function (data) {
                console.log('error');
            }
        });
    });
    // category actions
    $('.action-edit a').on('click', function (e) {
        e.preventDefault(e);
        var cat_id = $(this).closest('a').attr('data');
        var status = $(this).closest('a').parents(':eq(1)').attr('data');
        var name_uz = $(this).closest('a').parents(':eq(1)').prev().attr('data');
        var name_ru = $(this).closest('a').parents(':eq(1)').prev().children().text();
        var parent_id = $(this).closest('a').parents(':eq(1)').prevAll(':eq(1)').attr('data');
        var manager_id = $(this).closest('a').parents(':eq(2)').attr('data');
        $('.editCatId').val(cat_id);
        $('.editCatStatus').val(status);
        $('.editCatNameUz').val(name_uz);
        $('.editCatNameRu').val(name_ru);
        $('.editCatParent').val(parent_id);
        $('.editCatManager').val(manager_id);
    });
    // actions for products
    $('.product_action a').on('click', function (e) {
        e.preventDefault(e);
        $(this).closest('tr').each(function () {
            var id = $(this).children('td:first').text();
            var image = $(this).children('td:eq(0)').attr('data-image');
            var name_ru = $(this).children('td:eq(1)').text();
            var name_uz = $(this).children('td:eq(1)').attr('data-name');
            var manager_id = $(this).children('td:eq(2)').attr('data-manager');
            var category_id = $(this).children('td:eq(3)').attr('data-category');
            var new_price = $(this).children('td:eq(4)').attr('data-newprice');
            var old_price = $(this).children('td:eq(5)').attr('data-oldprice');
            var measurement = $(this).children('td:eq(6)').attr('data-measurement');
            var status = $(this).children('td:eq(7)').attr('data-status');
            $('#image_show').attr('src', "/storage/products/" + image);
            $('#image_show').parent().show().prevAll().hide();
            $('#editNameUz').val(name_uz);
            $('#editNameRu').val(name_ru);
            $('#editNewPrice').val(new_price);
            $('#editOldPrice').val(old_price);
            $('.editProduct_id').val(id);
            $('.manager_id').val(manager_id);
            $('.category_id').val(category_id);
            $('.measurement').val(measurement);
            $('.status').val(status);
        });
    });
    // action for orders
    $('.order_branch').on('click', function (e) {
        e.preventDefault(e);
        var branches = $(this).closest('tr').data('branches');
        var orderId = $(this).closest('tr').data('id');
        var orderBranchId = $(this).data('branch');
        $('#editOrderBranch').val(orderId);
        $('span.orderId').html(orderId);
        $('.branch_list').empty();
        $.each(branches, function (index, orderBranches) {
            $('.branch_list').append('<div class="list-item custom-control custom-radio"><input type="radio" id="orderBranch_' + orderBranches.id + '" name="branch_id" value="' + orderBranches.id + '" class="custom-control-input" '+ activeBranch(orderBranches.id) +'><label class="list-link custom-control-label" for="orderBranch_' + orderBranches.id + '"><div>' + orderBranches.name + '</div><small class="text-muted">Адресс: ' + orderBranches.address + '</small></label></div>');
        });
        function activeBranch($param){
            if($param == orderBranchId){
                return "checked";
            }
            return;
        }
    });

    $('.order_client').on('click', function(e){
        e.preventDefault(e);
        var clientName = $(this).closest('tr').data('cname');
        var clientId = $(this).data('client');
        $('span.orderIdForClient').html(clientId);
        $('.client-name').html(clientName);
    });

    $('.order_courier').on('click', function (e) {
        e.preventDefault(e);
        var orderId = $(this).closest('tr').data('id');
        var orderCourierId = $(this).data('courier');
        if(orderCourierId == null){ orderCourierId = '0'}
        $(".form-courier #orderCourier_" + orderCourierId ).prop("checked",true);
        $('#editOrderCourier').val(orderId);
        $('span.orderIdForCourier').html(orderId);
    });

    $('.order_status').on('click', function (e) {
        e.preventDefault(e);
        var orderId = $(this).closest('tr').data('id');
        var statusId = $(this).closest('tr').data('status');
        var branchId = $(this).closest('tr').data('bname');
        
        $(".form-status input[value = " + statusId + "]").prop("checked",true);
        $('#editOrderStatus').val(orderId);
    });
    
    // actions for couriers
    $('.courier_action a').on('click', function (e) {
        e.preventDefault(e);
        $(this).closest('tr').each(function () {
            var id = $(this).data('id');
            var fio = $(this).data('fio');
            var mobile = $(this).data('mobile');
            var status = $(this).data('status');
            var pass = $(this).data('pass');
            $('#editFio').val(fio);
            $('#editId').val(id);
            $('#editPass').val(pass);
            $('#editMobile').val(mobile);
            $('#editStatus').val(status);
        });
    });
    // actions for clients
    $('.client_action a').on('click', function (e) {
        e.preventDefault(e);
        $(this).closest('tr').each(function () {
            var id = $(this).data('id');
            var first_name = $(this).data('fname');
            var last_name = $(this).data('lname');
            var mobile = $(this).data('mobile');
            var birth_date = $(this).data('bdate');
            var jender = $(this).data('jender');
            var region = $(this).data('region');
            var status = $(this).data('status');
            var blacklist = $(this).data('blist');
            $('#editId').val(id);
            $('#editFirstName').val(first_name);
            $('#editLastName').val(last_name);
            $('#editMobile').val(mobile);
            $('#editDate').val(birth_date);
            $('#editJender').val(jender);
            $('#editRegion').val(region);
            $('#editStatus').val(status);
            if(blacklist == '1'){
                $('#editBlackList').prop('checked',true);
            }else{
                $('#editBlackList').prop('checked',false);
            }
            
        });
    });
    // checkbox button click disable input {working_time} select
    $('.custom-control-input').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents(':eq(1)').next().children().find('.col').children().prop('disabled', false);
        } else {
            $(this).parents(':eq(1)').next().children().find('.col').children().prop('disabled', true);
        }
    });
    // form-sumbit while changing dropdown button
    $('.dropdown-item').click(function () {
        var value = $(this).data('value');
        var name = $(this).closest('ul').parent().find('.btn:first-child').data('name');
        $('.myForm').find(name).val(value);
        $('.myForm').submit();
    });


    // from action delete show confirmations
    $(".delete").on("click", function () {
        return confirm("Are you sure?");
    });
    // modal close reset from values
    $('.modal').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
    // alert messages fade out time
    $('.box').delay(500).fadeIn('normal', function () {
        $(this).delay(2500).fadeOut();
    });
}); // end main functions

// custom functions
function disable(input) {
    return $(this).prop('disable', true);
}
