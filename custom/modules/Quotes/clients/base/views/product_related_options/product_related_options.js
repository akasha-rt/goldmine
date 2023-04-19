({

    // initialize:function(options){
    //     this._super('initialize',[options]);
    //     this._getRelatedProductsOptions();
    // },
    // _getRelatedProductsOptions:function(){
    //     var related_accessories = [];
    //     var currentURL = window.location.href;
    //     var splittedURL = currentURL.split("?");
    //     if(splittedURL.length==2){
    //         var productDATA = splittedURL[1].split("=");
    //         if(productDATA[0]=='product_number_id'){
    //             var product_number_id = productDATA[1];
    //             var product = app.data.createBean('ProductTemplates', {id: product_number_id});
    //             var product_accessories= product.getRelatedCollection('producttemplates_pa_productaccessories_1'); 
    //             product_accessories.fetch({ relate: true, success: function(model,data) {
    //                 for(var pro = 0 ; pro < model.length; pro++){
    //                     var product = model.models[pro];
    //                     console.log(product);
    //                     related_accessories.push([product.get('name'),product.get('product_options_c')]);
    //                 }
    //                 console.log(related_accessories);
    //             }, error: function(e) {}});


   
    //         }

    //     }
    // },

    events: {
        'click .add-to-line-item': 'addToLineItem',
    },
    className: 'tcenter',
    loadData: function (options) {
        myData=[];
        this.myData = myData;
        let self = this;
        var currentURL = window.location.href;
        var splittedURL = currentURL.split("?");
        if(splittedURL.length==2){
            var productDATA = splittedURL[1].split("=");
            if(productDATA[0]=='product_number_id'){
                var product_number_id = productDATA[1];
                var product = app.data.createBean('ProductTemplates', {id: product_number_id});
                var product_accessories= product.getRelatedCollection('producttemplates_pa_productaccessories_1'); 
                product_accessories.fetch({ relate: true, success: function(model,data) {
                    for(var pro = 0 ; pro < model.length; pro++){
                        var product = model.models[pro];
                        var options = JSON.parse(product.get('product_options_c'));
                        var new_options = [];
                        $.each(options, function(key,valueObj){
                            var option_description = '';
                            if(!_.isEmpty(valueObj[2])){
                                option_description = valueObj[2];
                            }
                            new_options.push({name:valueObj[0],price:valueObj[1],description:option_description});
                        });
                        myData.push( { name:product.get('name'), options:new_options});
                    }
                    self.render();
                }, error: function(e) {}});
            }

        }
    },
    addToLineItem:function(evt){
        var accessory_name = $(evt.currentTarget).parent().find('.v-option-name').val();
        var accessory_price = parseInt($(evt.currentTarget).parent().find('.v-option-price').val());
        var option_description = $(evt.currentTarget).parent().next().next().find('.v-option-description').val();
        
        // var currentURL = window.location.href;
        // console.log(currentURL);
        // var splittedURL = currentURL.split("?");
        // console.log(splittedURL);
        // var productDATA = splittedURL[1].split("=");
        // console.log(productDATA);
        // var product_number_id = productDATA[1];
        // console.log(product_number_id);
        
        // var payload_data = {};
        // payload_data['name'] = accessory_name;
        // payload_data['mft_part_num'] = accessory_name;
        // payload_data['quantity'] = 1;
        // payload_data['discount_price'] = accessory_price;
        // payload_data['description'] = option_description;
        // payload_data['product_template_id'] = product_number_id;
        // console.log(payload_data);

   
        // var product = app.data.createBean('Products',payload_data);
        // product.fetch({
        //     success: function (data) {
        //         var am_c_id = product.get('id');
        //         console.log("New Product ID");
        //         console.log(am_c_id);
        //         console.log(data);
        //     },
        //     error: function(error) {
        //         console.log(error);
        //     }
        // });
        // app.api.call('create', app.api.buildURL('Products'), payload_data, {
        //     success: function(data) {
        //         $product_id = data['id'];
        //         console.log("NEW DATA");
        //         console.log(data);
        //         console.log(data['id']);
        //         console.log(data.id);
        //     }
        // });



        // console.log(accessory_name);
        // console.log(accessory_price);
        $("[track='click:listactiondropdown']").click();
        $("[name='create_qli_button']").click();
        setTimeout(function(){
            $('.product-row').last().find("[name='mft_part_num']").val(accessory_name);
            $('.product-row').last().find("[name='mft_part_num']").change();
            $('.product-row').last().find("[name='discount_price']").val(accessory_price);
            $('.product-row').last().find("[name='discount_price']").change();
        }, 1000);
        // console.log("chal gaya");
        $(evt.currentTarget).attr("disabled", true);
    }



}) 