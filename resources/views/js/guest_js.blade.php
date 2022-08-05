<script>
    {{-- extracted the main documents data element to here for better reading --}}
    document.addEventListener('alpine:init', () => {
        Alpine.data('mainPage', () => ({
            themes:{
                dark: localStorage.getItem('dark') ?? '',
                necron: localStorage.getItem('necron') ?? '',
            },
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
        }))
    });
</script>