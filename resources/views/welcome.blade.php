@include('base')
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('storage/images/logo/12.jpg') }}" alt="Instructor și elev" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="text-primary">Despre Noi</h2>
            <p><strong>Școala CIO vă oferă:</strong></p>
            <ul>
                <li>- cursuri teoretice de legislație rutieră</li>
                <li>- cursuri practice obținere permis categoria B</li>
                <li>- cursuri practice de perfecționare pentru deținătorii de permis de conducere</li>
                <li>- cursurile teoretice se desfășoară la sediul școlii de pe strada București nr.74
                    (lângă baza sportivă Farmec), unde cursanții au posibilitatea simulării examenului teoretic
                    pe calculatoare cu software asemănătoare celor de la poliție. Cursanții au acces gratuit la
                    aceste calculatoare pe toată durata școlarizării.
                </li>
            </ul>
        </div>
    </div>
</div>@include('partial.footer')

