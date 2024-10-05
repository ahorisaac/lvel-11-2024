<x-mail::message>
# Thank you for your post - {{ $data['name'] }}.

Your post title is: {{ $data['title'] }}.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
