<!DOCTYPE html>
<html lang="en">

<livewire:home.layouts.head-tag>

    <body>

        <livewire:home.layouts.loader>


            <div class="tokyo_tm_all_wrap" data-magic-cursor="" data-color="black">

                <livewire:home.layouts.left-part />

                {{ $slot }}

                <div class="mouse-cursor cursor-outer"></div>
                <div class="mouse-cursor cursor-inner"></div>

            </div>

            <livewire:home.layouts.script>
    </body>

</html>
