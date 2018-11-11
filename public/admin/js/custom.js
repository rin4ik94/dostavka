$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // check new order added
    setInterval(function () {
        var default_count = $('span.new').text();
        $.ajax({
            type: "GET",
            url: '/api/checkNewOrder',
            success: function (data) {
                console.log(data);
                if (data['status']) {
                    $('span.order_new_count').text(data['count']);
                    $('#display_new_order').find('span').text('у вас есть новый заказ!!');
                    $('#display_new_order').removeClass('d-none');
                    // $('table.order_new_add').find('tbody').prepend("<tr><td><a class='text-red new_order_id' data-id='" + data.data.id + "' href='#' data-toggle='modal' data-target='#Order'>" + data.data.id + "</a></td><td>" + dateFormat(data.data.created_at) + "</td><td>" + data.data.manager.name + "</td><td><a class='text-red new_order_branch' href='#' data-toggle='modal' data-target='#orderBranch'>Выбрать</a></td><td><a class='text-green new_order_client' href='#' data-toggle='modal' data-target='#Client'>" + data.data.client.first_name + ' ' + data.data.client.last_name + "</a></td><td>" + data.data.delivery_address_street + "</td><td><a class='text-red new_order_courier' href='#' data-toggle='modal' data-target='#orderCourier'>Назначить</a></td><td>" + number_format(data.data.total_price) + "</td><td>" + data.data.payment.name_ru + "</td><td><a class='btn btn-info new_order_status' href='#' data-toggle='modal' data-target='#orderStatus'>Новый</td><tr>");
                } else {
                    $('span.order_new_count').text(data['count']);
                }
            },
            error: function (data) {
                console.log('error');
            }
        });
    }, 10000);
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
    $('.api_manager').on('change', function () {
        var id = $(this).val();
        $.ajax({
            type: "GET",
            url: '/api/categories?withManager&manager=' + id,
            success: function (data) {
                $('.api_category').empty();
                $('.api_category').append("<option value='' selected disabled>Не выбран</option>");
                $.each(data.data, function (index, dataObj) {
                    $('.api_category').append("<option value=" + dataObj.id + " disabled>" + dataObj.name + "</option>");
                    if (dataObj.children.length > 0) {
                        $.each(dataObj.children, function (index, childObj) {
                            $('.api_category').append("<option value=" + childObj.id + ">" + "&nbsp;&nbsp;" + childObj.name + "</option>");
                        });
                    }
                });
                $('.api_category').prop('disabled', false);
            },
            error: function (data) {
                console.log('error');
            }
        });
    });

    // image close button {image Preview}
    $('.custom-image-close').on('click', function () {
        if (confirmations('логотип')) {
            $(this).parent().hide().prev().show();
            $(this).parents(':eq(1)').show().find('input').val('');
        }
    });

    //actions for manager
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
        $("#edit_manager_cat_id").val(category);
        $('#manager_id').val(id);
        $('#edit_status').val(status);
        $('.delete_manager').data('destroy', id);
    });
    // delete manager via ajax
    $(".delete_manager").click(function (e) {
        e.preventDefault(e);
        var id = $(this).data('destroy');
        if (confirmations('магазин')) {
            $.ajax({
                url: '/admin/managers/' + id,
                type: 'delete',
                success: function (result) {
                    location.reload();
                }
            });
        }
    });

    //actions for manager-group
    $('.manager_group_action').on('click', function (e) {
        e.preventDefault(e);
        var id = $(this).closest('tr').data('id');
        var name_ru = $(this).closest('tr').data('nameru');
        var name_uz = $(this).closest('tr').data('nameuz');
        $('#name_ru').val(name_ru);
        $('#name_uz').val(name_uz);
        $('#editManagerGr').val(id);
        $('.delete_manager_group').data('destroy', id);
    });

    $('.delete_manager_group').on('click', function (e) {
        e.preventDefault(e);
        var id = $(this).data('destroy');
        if (confirmations('категория')) {
            $.ajax({
                url: '/admin/managers/group/' + id,
                type: 'delete',
                success: function (result) {
                    location.reload();
                }
            });
        }
    });
    //actions for employee-group
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
    //actions for employeer
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
    $('.branch_action').on('click', function (e) {
        e.preventDefault(e);
        $('.timeStart').prop('disabled', true);
        $('.timeFinish').prop('disabled', true);
        var uri = $(this).attr('href');
        var branch_id = $(this).closest('tr').data('id');
        var branch_name = $(this).closest('tr').data('bname');
        var manager_id = $(this).closest('tr').data('managerid');
        var region_id = $(this).closest('tr').data('region');
        var address = $(this).closest('tr').data('address');
        var status = $(this).closest('tr').data('status');
        $('.modal-loader').css('display', 'block');
        $.ajax({
            type: "GET",
            url: uri,
            dataType: 'json',
            success: function (data) {
                data.branchWorkdays.forEach(function (item, key) {
                    checkWorkingModeActive(item.working_mode_id, item.time_start, item.time_finish);
                });
                $('#branchId').val(branch_id);
                $('#editBranchName').val(branch_name);
                $("#editManagerName").val(manager_id);
                $("#editRegionName").val(region_id);
                $("#editAddress").val(address);
                $("#editStatus").val(status);
                $('.delete_branch').data('destroy', branch_id);
                $('.modal-loader').css('display', 'none');
            },
            error: function (data) {
                console.log('error');
            }
        });
    });

    $('.delete_branch').on('click', function (e) {
        e.preventDefault(e);
        var id = $(this).data('destroy');
        if (confirmations('филиал')) {
            $.ajax({
                url: '/admin/branchs/' + id,
                type: 'delete',
                success: function (result) {
                    console.log(result);
                    location.reload();
                }
            });
        }
    });
    // actions for category
    $('.category_action a').on('click', function (e) {
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

    $('.delete_category').on('click', function () {
        confirmations('категория');
    });

    // actions for products
    $('.product_action').on('click', function (e) {
        e.preventDefault(e);
        $('.api_category').empty();
        $('.api_category').append("<option value='' selected disabled>Не выбран</option>");
        var id = $(this).closest('tr').data('id');
        var image = $(this).closest('tr').data('image');
        var name_ru = $(this).closest('tr').data('nameru');
        var name_uz = $(this).closest('tr').data('nameuz');
        var manager_id = $(this).closest('tr').data('manager');;
        var category_id = $(this).closest('tr').data('category');
        var new_price = $(this).closest('tr').data('newprice');
        var old_price = $(this).closest('tr').data('oldprice');
        var measurement = $(this).closest('tr').data('measurement');
        var status = $(this).closest('tr').data('status');
        var uri = '/admin/products/' + id;
        $.ajax({
            type: "GET",
            url: '/api/categories?withManager&manager=' + manager_id,
            success: function (data) {
                $.each(data.data, function (index, dataObj) {
                    $('.api_category').append("<option value=" + dataObj.id + " disabled>" + dataObj.name + "</option>");
                    if (dataObj.children.length > 0) {
                        $.each(dataObj.children, function (index, childObj) {
                            $('.api_category').append("<option value=" + childObj.id + ">" + "&nbsp;&nbsp;" + childObj.name + "</option>");
                        });
                    }
                });
            },
        });
        $('#productEdit').attr('action', uri);
        $('#image_show').attr('src', "/storage/products/" + image);
        $('#image_show').parent().show().prevAll().hide();
        $('#editNameUz').val(name_uz);
        $('#editNameRu').val(name_ru);
        $('#editNewPrice').val(new_price);
        $('#editOldPrice').val(old_price);
        $('.edit_product_id').val(id);
        $('#editManager').val(manager_id);
        $('#editCat').val(category_id);
        $('.measurement').val(measurement);
        $('.status').val(status);
        $('.delete_porduct').data('destroy', id);
    });
    // actions for orders
    $('.order_id').on('click', function (e) {
        e.preventDefault(e);
        $('#orderBranches').empty();
        $('.order_products').empty();
        $('#orderBranches').removeClass('border-danger');
        $productSet = [];
        $orderId = $(this).closest('tr').data('id');
        $status_id = $(this).closest('tr').data('status');
        $client_name = $(this).closest('tr').data('cname');
        $client_mobile = $(this).closest('tr').data('cmobile');
        $manager_name = $(this).closest('tr').data('mname');
        $branches = $(this).closest('tr').data('branches');
        $orderBranchId = $(this).closest('tr').data('branch');
        $region_id = $(this).closest('tr').data('region');
        $order_street = $(this).closest('tr').data('ostreet');
        $order_home = $(this).closest('tr').data('ohome');
        $order_floor = $(this).closest('tr').data('ofloor');
        $order_apartment = $(this).closest('tr').data('oapartment');
        $order_remark = $(this).closest('tr').data('oremark');
        $order_price = $(this).closest('tr').data('oprice');
        $total_price = $(this).closest('tr').data('tprice');
        $deliver_price = $(this).closest('tr').data('odeliver');
        $payment = $(this).closest('tr').data('payment');
        $products = $(this).closest('tr').data('products');
        $statuses = $(this).closest('tr').data('statuses');
        $product_pivot = $.map($products, function ($value, $key) {
            return $value['pivot'];
        });
        $order_status_pivot = $.map($statuses, function ($value, $key) {
            return $value['pivot'];
        });
        $('#orderStory').empty();
        $.each($order_status_pivot, function (index, orderStory) {
            $('#orderStory').append(getStatusName(orderStory.order_status_id) + ': ' + dateFormat(orderStory.created_at) + '\n');
        });
        $.each($product_pivot, function (index, orderProduct) {
            $('.order_products').append('<tr class="parent_row_order"><td>' + orderProduct.product_id + '</td><td>' + orderProduct.product_name + '</td><td class="product_price">' + orderProduct.product_price + '</td><td>шт</td><td class="product_count"><div class="counter-widget input-group input-group-sm"><div class="input-group-prepend"><button class="btn btn-outline-red decrement" type="button"><i class="icon">remove</i></button></div><input class="form-control input_porduct_count" name="product_count[]" value="' + orderProduct.product_count + '" type="text" disabled><div class="input-group-append"><button class="btn btn-outline-green increment" type="button"><i class="icon">add</i></button></div></div></td></tr>');
        });
        $('.product_total_count').html('(' + calculateSum() + ')');
        $('.increment').click(function () {

            $y = parseInt($(this).parent().prev().val());
            $y++;
            var data = [];
            $(".order_products tr").each(function (i, v) {
                data[i] = [];
                var set = $(this).children('td');
                var length = set.length;
                set.each(function (ii, vv) {
                    data[i][ii] = $(this).text();
                    if (ii === (length - 1)) {
                        if (parseInt($(this).find('.input_porduct_count').val()) + 1 == $y) {
                            data[i][ii] = $y;
                        } else {
                            data[i][ii] = parseInt($(this).find('.input_porduct_count').val());
                        }
                    }
                });
            });
            if ($y > 1) {
                $(this).parents('.product_count').find('.decrement').html('<i class="icon">remove</i>');
            }
            $(this).parent().prev().val($y);
            $('.product_total_count').html('(' + calculateSum() + ')');
            $('.orderPrice').val(calculateProductSumma());
            $('.totalPrice').val(calculateProductTotalPrice());
            $('#orderProductSet').val(data);
        });
        $('.decrement').click(function () {
            $y = parseInt($(this).parent().next().val());
            $y--;
            var data = [];
            $(".order_products tr").each(function (i, v) {
                data[i] = [];
                var set = $(this).children('td');
                var length = set.length;
                set.each(function (ii, vv) {
                    data[i][ii] = $(this).text();
                    if (ii === (length - 1)) {
                        if (parseInt($(this).find('.input_porduct_count').val()) - 1 == $y) {
                            data[i][ii] = $y;
                        } else {
                            data[i][ii] = parseInt($(this).find('.input_porduct_count').val());
                        }
                    }
                });
            });
            if ($y == 1) {
                $(this).html('<i class="icon">clear</i>');
            }
            if ($y < 1) {
                $tr = $(this).closest('tr');
                $tr.fadeOut(400, function () {
                    $tr.remove();
                });
            }
            $(this).parent().next().val($y);
            $('.product_total_count').html('(' + calculateSum() + ')');
            $('.orderPrice').val(calculateProductSumma());
            $('.totalPrice').val(calculateProductTotalPrice());
            $('#orderProductSet').val(data);
        });

        $('#statusOrder').val($status_id);
        $('#orderClientName').val($client_name);
        $('#orderClientMobile').val('+998' + $client_mobile);
        $('#orderManagerName').val($manager_name);
        $('#orderBranches').append('<option value="" selected disabled>Не выбран</option>')
        $.each($branches, function (index, orderBranches) {
            $('#orderBranches').append('<option value="' + orderBranches.id + '" ' + activeOrderBranch(orderBranches.id) + '>' + orderBranches.name + '(' + orderBranches.address + ')</option>');
        });
        $('#orderRegions').val($region_id);
        $('#deliveryStreet').val($order_street);
        $('#deliveryHome').val($order_home);
        $('#deliveryFloor').val($order_floor);
        $('#deliveryApartment').val($order_apartment);
        $('#deliveryRemark').val($order_remark);
        $('#payment').val($payment);
        $('#deliveryPrice').val($deliver_price);
        $('#editOrder').val($orderId);
        $('.orderPrice').val(calculateProductSumma());
        $('.totalPrice').val(calculateProductTotalPrice());
        $('.order_modal_title').text($orderId);

        function calculateProductTotalPrice() {
            $order_price = parseInt($('.orderPrice').val());
            $delivery_price = parseInt($('#deliveryPrice').val());
            return $order_price + $delivery_price;
        }

        function activeOrderBranch($param) {
            if ($param == $orderBranchId) {
                return "selected";
            }
            return;
        }
    });
    // before appointing order check status and branch to change only 2-nd if courier value has can choose 3-th status
    $('.check_order').on('click', function (e) {
        e.preventDefault(e);
        var order_branch = $('#orderBranches').val();
        var order_courier = $('.order_courier').data('courier');
        if (order_branch > 0) {
            $('.form-order').submit();
        } else {
            $('#orderBranches').addClass('border-danger');
            alert('Перед изменением заказ необходимо проверить филиал!');
        }
    });

    $('.order_branch').on('click', function (e) {
        e.preventDefault(e);
        var branches = $(this).closest('tr').data('branches');
        var orderId = $(this).closest('tr').data('id');
        var orderBranchId = $(this).closest('tr').data('branch');
        $('#editOrderBranch').val(orderId);
        $('span.branch_modal_title').text(orderId);
        $('.branch_list').empty();
        $.each(branches, function (index, orderBranches) {
            $('.branch_list').append('<div class="list-item custom-control custom-radio"><input type="radio" id="orderBranch_' + orderBranches.id + '" name="branch_id" value="' + orderBranches.id + '" class="custom-control-input" ' + activeBranch(orderBranches.id) + '><label class="list-link custom-control-label" for="orderBranch_' + orderBranches.id + '"><div>' + orderBranches.name + '</div><small class="text-muted">Адресс: ' + orderBranches.address + '</small></label></div>');
        });

        function activeBranch(param) {
            if (param == orderBranchId) {
                return "checked";
            }
            return;
        }
    });
    // before appointing courier check branch value
    $('.check_branch').on('click', function (e) {
        e.preventDefault(e);
        var order_branch = parseInt($('#orderCourier_0').data('branch'));
        if (order_branch != 0) {
            $('.form-courier').submit();
        } else {
            alert('Перед выбором курьер должен быть проверен филиалом!');
        }
    });
    $('.order_client').on('click', function (e) {
        e.preventDefault(e);
        var clientName = $(this).closest('tr').data('cname');
        var clientMobile = $(this).closest('tr').data('cmobile');
        var clientId = $(this).data('client');

        $('span.client_modal_title').text(clientId);
        $('.client-name').text(clientName);
        $('.client-mobile').text('+998' + clientMobile);
    });

    $('.order_courier').on('click', function (e) {
        e.preventDefault(e);
        var orderId = $(this).closest('tr').data('id');
        var orderCourierId = $(this).data('courier');
        var branch_id = $(this).closest('tr').data('branch');
        if (!orderCourierId) {
            orderCourierId = '0'
        }
        $(".form-courier #orderCourier_" + orderCourierId).prop("checked", true);
        $('#editOrderCourier').val(orderId);
        $('#orderCourier_0').data('branch', branch_id);
        $('span.courier_modal_title').text(orderId);
    });

    $('.order_status').on('click', function (e) {
        e.preventDefault(e);
        var orderId = $(this).closest('tr').data('id');
        var statusId = $(this).closest('tr').data('status');
        var order_branch_id = $(this).closest('tr').data('branch');
        var order_courier_id = $(this).closest('tr').data('courier');
        $('.check_branch_courier').data('branch', order_branch_id);
        $('.check_branch_courier').data('courier', order_courier_id);
        $('.form-status input[value = ' + statusId + ']').prop('checked', true);
        $('span.order_status_id').text(orderId);
        $('#editOrderStatus').val(orderId);
    });
    // before appointing status check branch and courier values
    $('.check_branch_courier').on('click', function (e) {
        e.preventDefault(e);
        var order_branch = $(this).data('branch');
        var order_courier = $(this).data('courier');
        console.log(order_branch + '+' + order_courier);
        var status_value = $('input[name=order_status_id]:checked').val();
        if (order_branch && order_courier) {
            $('.form-status').submit();
        } else if (status_value == 5) {
            $('.form-status').submit();
        } else {
            alert('Перед изменением статуса необходимо проверить филиал и курьер!');
        }
    });
    // actions for couriers
    $('.courier_action').on('click', function (e) {
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
            $('.delete_courier').data('destroy', id);
        });
    });
    $(".delete_courier").click(function (e) {
        e.preventDefault(e);
        var id = $(this).data('destroy');
        if (confirmations('курьер')) {
            $.ajax({
                url: '/admin/couriers/' + id,
                type: 'delete',
                success: function (result) {
                    location.reload();
                }
            });
        }
    });
    // actions for clients
    $('.client_action').on('click', function (e) {
        e.preventDefault(e);
        $(this).closest('tr').each(function () {
            var id = $(this).data('id');
            var first_name = $(this).data('fname');
            var last_name = $(this).data('lname');
            var phone = $(this).data('phone');
            var birth_date = $(this).data('bdate');
            var jender = $(this).data('jender');
            var region = $(this).data('region');
            var status = $(this).data('status');
            var blacklist = $(this).data('blist');
            $('#editId').val(id);
            $('#editFirstName').val(first_name);
            $('#editLastName').val(last_name);
            $('#editMobile').val(phone);
            $('#editDate').val(birth_date);
            $('#editJender').val(jender);
            $('#editRegion').val(region);
            $('#editStatus').val(status);
            $('.delete_client').data('destroy', id);
            if (blacklist == '1') {
                $('#editBlackList').prop('checked', true);
            } else {
                $('#editBlackList').prop('checked', false);
            }
        });
    });

    $(".delete_client").click(function (e) {
        e.preventDefault(e);
        var id = $(this).data('destroy');
        if (confirmations('клиент')) {
            $.ajax({
                url: '/admin/clients/' + id,
                type: 'delete',
                success: function (result) {
                    location.reload();
                }
            });
        }
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
    // modal close reset from values
    $('.modal').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
    // alert messages fade out time
    $('.box').delay(500).fadeIn('normal', function () {
        $(this).delay(2500).fadeOut();
    });
}); // end main functions
// branchWorkdays 1
function checkWorkingModeActive(working_mode_id, time_start, time_finish) {
    $('.branCheckbox').find('.custom-control-input').each(function () {
        var input = $(this);
        if (checkboxActive(input, working_mode_id)) {
            $(input).prop('checked', true);
            $(input).parents(':eq(1)').next().children().find('.timeStart').val(time_start).prop('disabled', false);
            $(input).parents(':eq(1)').next().children().find('.timeFinish').val(time_finish).prop('disabled', false);
        }
    });
}
// branchWorkdays 2
function checkboxActive(input, working_mode_id) {
    var arr = input.val();
    for (var i = arr.length - 1; i >= 0; i--) {
        if (arr[i] == working_mode_id) {
            return true;
        } else {
            return false;
        }
    }
}

function confirmations(param = '') {
    var result = confirm("Вы уверены, что хотите удалить " + param + "?");
    return result;
};

// custom functions
function disable(input) {
    return $(this).prop('disable', true);
};

function getStatusName($status) {
    $status = parseInt($status);
    switch ($status) {
        case 2:
            return 'Формируется';
            break;
        case 3:
            return 'В пути';
            break;
        case 4:
            return 'Доставлен';
            break;
        case 5:
            return 'Отменен';
            break;
        default:
            return 'Новый';
            break;
    }
};

function calculateSum() {
    var sum = 0;
    $(".input_porduct_count").each(function () {
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
        }
    });
    return sum;
};

function calculateProductSumma() {
    $summa = 0;
    $(".parent_row_order").each(function () {
        $product_price = parseInt($(this).find('.product_price').text());
        $product_count = parseInt($(this).find('.input_porduct_count').val());
        $summa += $product_price * $product_count;
    });
    return $summa;
};

function dateFormat($date) {
    $formattedDate = new Date($date);
    $d = $formattedDate.getDate();
    $m = $formattedDate.getMonth() + 1;
    $y = $formattedDate.getFullYear();
    $h = $formattedDate.getHours();
    $min = $formattedDate.getMinutes();
    if ($d < 10) {
        $d = "0" + $d;
    }
    if ($m < 10) {
        $m = "0" + $m;
    }
    if ($min == 0) {
        $min = "0" + $min;
    }
    return $d + "." + $m + "." + $y + " " + $h + ":" + $min;
};

function number_format(number, decimals = '0', dec_point = ' ', thousands_sep = ' ') {
    number = parseInt(number);
    number = number.toFixed(decimals);

    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');
    return x1 + x2;
};

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + ";";
}

function inRange(n, nStart, nEnd) {
    if (n >= nStart && n < nEnd) return true;
    else return false;
}
