
<div {{ $attributes }}>
    <div class="fixed inset-0 bg-gray-500 opacity-40"></div>


    <div class="bg-white shadow-md p-4 max-w-sm m-auto rounded-md fixed inset-0 h-40" >
        <div class="flex flex-col h-full justify-between">
            <header>
                {{$title}}
            </header>
            <main class="mb-4">
                {{$body}}
            </main>
            <footer>
                {{$footer}}
            </footer>
        </div>
    </div>
</div>
