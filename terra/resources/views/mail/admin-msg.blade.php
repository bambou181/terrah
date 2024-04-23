<x-mail::message>
# Un nouvel utilisateur interessé par le terrain {{json_decode($data['terrain_id'], true)['name']}}

nom: {{$data['name']}} <br>
Contact: {{$data['phone']}} <br>
Email: {{$data['email']}}







Cordialement,
</x-mail::message>
