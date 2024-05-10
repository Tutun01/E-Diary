@foreach($grades as $studentGrade)
    <p> {{ $studentGrade -> subject }} {{ $studentGrade-> teacher }}: {{ $studentGrade->grades  }} </p>

@endforeach
