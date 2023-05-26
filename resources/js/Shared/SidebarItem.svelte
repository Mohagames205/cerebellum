<script>

    export let link;
    export let text;
    export let svg = "";

</script>



<a href="{link}">

<div class="p-6 text-center text-2xl flex gap-x-6 justify-center text-gray-600">
    <span class="material-symbols-outlined block my-auto">
        {svg}
    </span>

    {text}

</div>

</a>
