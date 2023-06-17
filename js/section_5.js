class Section_5Class extends father{
    constructor(elem) {
        super(elem);
        this.show_window = false;
        this.our_work_window = this.find('.our_work');
        this.btn_open = this.find('.buttons .open');
        this.btn_close = this.find('.buttons .close');

        this.events();
    }

    showWindowHandler(){
        this.our_work_window.addClass('show_pictures_window');
        this.btn_open.css({'display':'none'});
        this.btn_close.css({'display':'inline-block'});
    }
    closeWindowHandler(){
        this.our_work_window.removeClass('show_pictures_window');
        this.btn_open.css({'display':'inline-block'});
        this.btn_close.css({'display':'none'});
    }

    events(){
        this.btn_open.on('click', this.showWindowHandler.bind(this));
        this.btn_close.on('click', this.closeWindowHandler.bind(this));
    };
}