<h3>Prise de contact</h3>
<p>
    Envoiyé par: {{ $nom ?? ' ' }}  {{ $prenom ?? ' ' }}<br/>
    Adresse email: {{ $email ?? 'test@test' }}<br/>
    Objet: {{$object ?? ''}}<br/>
</p>
<h3>Message</h3>
<p> {{ $body ?? '' }}</p>