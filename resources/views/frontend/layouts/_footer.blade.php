</div>
<div class="mt-4 p-4 border-t border-blue-200 md:flex md:justify-between text-center">
    <div>
        <?php echo '&copy; ' . (new DateTime())->format('Y') . ' Al Imran Ahmed' ?>
    </div>

    <div class="flex justify-center my-3 md:my-0">
        <a href="https://stackoverflow.com/users/2997855/imran" target="_blank">
            <x-tni-stackoverflow class="text-orange-500"/>
        </a>
        <a href="https://twitter.com/al_imran_cse" target="_blank" class="mx-3">
            <x-uni-twitter-alt-thin class="text-blue-700"/>
        </a>
        <a href="https://www.linkedin.com/in/alimrancse/" target="_blank" class="mr-3">
            <x-uni-linkedin-alt-thin class="text-blue-900"/>
        </a>
        <a href="https://www.youtube.com/channel/UC14rfvux_ri5gC4l9AeV1UA" target="_blank" class="mr-3">
            <x-uni-youtube-thin class="text-red-700"/>
        </a>
        <a href="https://github.com/alimranahmed" target="_blank">
            <x-uni-github-alt-thin />
        </a>
    </div>

    <div>
        <a href="{{route('contact')}}" class="border-b border-dotted border-indigo-600">Contact</a>
    </div>
</div>

@livewireScripts
<script src="{{ mix("build/js/app.js") }}"></script>
<script src="{{asset('js/prism.js')}}" defer></script>

</body>
</html>