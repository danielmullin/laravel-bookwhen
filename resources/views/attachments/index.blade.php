<h1>Showing all attachments</h1>

@forelse ($attachments as $attachment)
<li><a href="./attachments/{{ $attachments->title }}">{{ $attachment->title }}</a></li>
@empty
    <p> 'No attachments yet' </p>
@endforelse