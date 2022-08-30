<script>
    {{-- extracted the main documents data element to here for better reading --}}
    document.addEventListener('alpine:init', () => {
        Alpine.data('mainPage', () => ({
            @if(\Auth::check() && \Auth::user()->id == 1)
            {{-- The javascript won't render unless logged in behind the editor guard --}}
            dev: '',
            @endif
            themes:{
                dark: localStorage.getItem('dark') ?? false,
                necron: localStorage.getItem('necron') ?? false,
            },
            showSmMenu: false,
            smMenu: '',
            {{-- The themes control. Will set the :class on element main in layouts/main.blade.php --}}
            toggleTheme(theme){
                for (const item in this.themes) {
                    /** If the theme is the one selected, toggle it, else set back to original state */
                    if(item == theme && this.themes[theme] == ''){
                        localStorage.setItem(theme, 'true');
                        this.themes[theme] = 'true';
                    }else{
                        this.themes[item] = '';
                        localStorage.removeItem(item);
                    }
                }
            },
            @if(\Auth::check() && \Auth::user()->id == 1)
            {{-- The javascript won't render unless logged in behind the editor guard --}}
            toggleDev(){
                this.dev = ! this.dev;
            },
            @endif

            showMailModal: false,
            toggleMailModal(){
                this.showMailModal = ! this.showMailModal;
            },

            {{-- The menu control on small devices--}}
            toggleSmMenu(){
                this.showSmMenu = !this.showSmMenu;
                if(this.showSmMenu){
                    this.smMenu = 'h-full';
                }
            },

            currentSlide: 1,
            transitionSlide( direction ){
                if(direction == 1){
                    this.currentSlide++;
                }else{
                    this.currentSlide--;
                }
            },
            pickSlide( id ){
                this.currentSlide = id;
            },
            goRight(){
                if(this.currentSlide < 9){
                    this.transitionSlide(1);
                }else{
                    this.pickSlide(1);
                }
            },
            goLeft(){
                if(this.currentSlide > 1){
                    this.transitionSlide(2);
                }else{
                    this.pickSlide(9);
                }
            }

        }))
    });
</script>