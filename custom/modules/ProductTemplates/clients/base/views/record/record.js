({
    extendsFrom: 'RecordView',
    initialize: function (options) {
        this._super('initialize', [options]);
        this.context.on('button:create_quote:click', this.create_quote, this);
    },
    create_quote: function() {
        var product_numer_id = this.model.get('id');
        app.router.redirect("Quotes/create?product_number_id="+product_numer_id);
        console.log("This is a tes please ignore.");
    }
})