class Callback_form extends father{
    constructor(elem) {
        super(elem);
        this.env = new Env();

        this.callback_buttons = this.find('.callback_btn');
        this.callback_close = this.find('.callback_close');
        this.callback_form = this.find('.callback_form2');
        this.callback_form_submit = this.callback_form.find('.callback_submit');
        this.input_name = this.callback_form.find('input[name="name"]');
        this.input_phone = this.callback_form.find('input[name="phone"]');
        this.input_email = this.callback_form.find('input[name="email"]');

        this.events();
    }


    show_callback_window(){
        this.callback_form.addClass('display_flex');
        this.scroll_off();
    }
    hide_callback_window(){
        this.callback_form.removeClass('display_flex');
        this.scroll_on();
    }
    hide_callback_window2(e){
        if($(e.target).hasClass('callback_form')){
            this.hide_callback_window();
        }
    }
    fresh_inputs(){
        this.input_name.val('');
        this.input_phone.val('');
        this.input_email.val('');
    }

    sendMessage(callback = ()=>{}){ /* используйте GET запрос в PHP*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'POST',
            url: `https://api.telegram.org/bot${this.env.bot_token()}/sendMessage`,
            cache: false,
            data: {
                chat_id: this.env.group_id(),
                text: this.create_message(),
                parse_mode: "HTML"
            },
            success: function (data) {
                callback(data);
            },
            error: function (data, textStatus, errorThrown) {
                console.log('ERROR_A-X');
            },
        });
    }
    create_message(){
        const name = this.input_name.val();
        const phone = this.input_phone.val();
        const email = this.input_email.val();
        if(name.length > 2 && phone.length >= 7){
            return `Имя: ${name} \nphone: ${phone}\nemail: ${email}`;
        }else{return false;}
    }
    submitHandler(){
        if(this.create_message()) this.sendMessage();
        this.fresh_inputs();
        // setTimeout(() => {this.hide_callback_window()}, 1500);
        setTimeout(() => {this.fresh_inputs()}, 1500);
    }


    events(){
        // this.callback_buttons.on('click', this.show_callback_window.bind(this));
        // this.callback_close.on('click', this.hide_callback_window.bind(this));
        // this.callback_form.on('mousedown', this.hide_callback_window2.bind(this));
        this.callback_form_submit.on('click', this.submitHandler.bind(this));
    };
}