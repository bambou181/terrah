<x-mail::message>
# 

Cher(e) {{ $data['name'] }},

Nous vous remercions pour votre intérêt pour le terrain {{json_decode($data['terrain_id'], true)['name']}} sur notre plateforme. Nous avons bien reçu votre demande et nous vous en remercions.

Votre demande a été transmise à notre équipe et nous la traiterons dans les plus brefs délais. Nous vous contacterons dès que possible pour discuter des prochaines étapes et répondre à toutes vos questions.

En attendant, n'hésitez pas à parcourir notre site pour découvrir d'autres terrains disponibles ou à nous contacter directement si vous avez des demandes spécifiques ou des besoins particuliers.

Nous sommes impatients de vous aider à concrétiser votre projet immobilier.

Cordialement,

<x-mail::button :url="''">
Button Text
</x-mail::button>
</x-mail::message>
