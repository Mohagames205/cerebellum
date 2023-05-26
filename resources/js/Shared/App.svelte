<script>
import Sidebar from "@/Shared/Sidebar.svelte";
</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<div class="bg-white min-h-screen">

    <div class="content grid grid-cols-9 min-h-screen">
        <Sidebar></Sidebar>

        <div class="bg-slate-100 col-span-7 h-full rounded-2xl">
            <div class="navbar bg-green-600 p-8">

            </div>

            <slot />
        </div>
    </div>


</div>
