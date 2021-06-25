<h3>Demande d'emploi</h3>
<p>
    Envoiyé par: {{ $nom ?? ' ' }}  {{ $prenom ?? ' ' }}<br/>
    Adresse email: {{ $email ?? 'test@test' }}<br/>
    Objet: {{$object ?? ''}}<br/>
    Poste: {{$speciality ?? ''}}<br/>
</p>
<h3>Message</h3>
<p> {{ $body ?? '' }}</p>