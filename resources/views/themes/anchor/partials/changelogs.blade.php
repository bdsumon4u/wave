@php $changeLogNotification = Wave\Changelog::orderBy('created_at', 'DESC')->first() @endphp
<div id="changeLogNotification" class="flex fixed right-0 bottom-0 z-50 justify-center items-end px-4 py-6 opacity-100 transition-all duration-200 ease-out transform translate-y-0 cursor-pointer pointer-events-none hover:-translate-y-1 sm:p-6 sm:items-start sm:justify-end" data-href="{{ route('changelog', ['changelog' => $changeLogNotification->id]) }}">
	<div id="changelog_content" class="relative w-full max-w-sm bg-white rounded-lg border shadow-lg pointer-events-auto border-zinc-200">
		<div class="relative p-5">
			<span id="changelog_close" class="inline-flex absolute top-0 right-0 mt-5 mr-5 transition duration-150 ease-in-out cursor-pointer text-zinc-400 focus:outline-none focus:text-zinc-500">
				<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
					<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
				</svg>
			</span>
			<h4 class="text-sm font-medium leading-5 text-zinc-900">{{ $changeLogNotification->title }}</h4>
			<p class="mt-2 text-sm leading-5 text-zinc-500">{{ $changeLogNotification->description }}</p>
			<div id="changelog_footer" class="mt-1"><a href="{{ route('changelog', ['changelog' => $changeLogNotification->id]) }}" class="text-sm font-medium leading-5 text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">Learn More</a></div>
		</div>
	</div>
</div>

<script>

	var changeLogEl = document.getElementById('changeLogNotification');

	document.getElementById('changelog_close').addEventListener('click', function(evt){
		changeLogEl.classList.remove('opacity-100');
		changeLogEl.classList.add('opacity-0');
		markNotificationsRead();
		evt.stopPropagation();
		setTimeout(function(){
			changeLogEl.remove();
		}, 300);
	});

	changeLogEl.addEventListener('click', function(e){
		if(e.target.parentElement.id != "changelog_close" && e.target.id != "changelog_close"){
			markNotificationsRead();
			window.location = changeLogEl.dataset.href;
		}
	});

	function markNotificationsRead(endpoint, splitPopReadyState){
		var HttpRequest = new XMLHttpRequest();
		HttpRequest.open("POST", "{{ route('changelog.read') }}", true);
		HttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		HttpRequest.send("_token={{ csrf_token() }}");
	}
</script>
