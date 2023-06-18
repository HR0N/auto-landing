class Language extends father{
    constructor(elem) {
        super(elem);

        this.events();
    }


    events(){
        console.log(this.el);
    };
}