<style>
.sidebar {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    width: 15%;
    min-width: 120px;
    max-width: 250px;
    background-color: #2c3e50;
    padding: 10px;
    height: 100%;
    position: sticky;
    top: 0; /* Fija la barra lateral mientras haces scroll */
    overflow-y: auto; /* Permite desplazamiento si hay demasiados elementos */
    z-index: 1000;
}

.sidebar a {
    margin-bottom: 10px;
}

.sidebar img {
    max-height: 40px;
    width: auto;
}

@media (max-width: 768px) {
    .sidebar {
        width: 80%; /* Ancho relativo para móviles */
        height: auto; /* Permite ajustar la altura automáticamente */
        position: fixed; /* Colapsa en la parte superior */
        top: 0;
        left: 0;
        z-index: 1050;
    }

    .sidebar a {
        margin-bottom: 15px;
    }
}

@media (max-width: 576px) {
    .sidebar img {
        max-height: 30px; /* Ajusta el tamaño de los íconos para móviles */
    }
}
</style>

<aside class="sidebar">
    <a href="{{ route('homepage') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconhome.png') }}" alt="Home">
    </a>
    <a href="{{ route('special') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconCare.png') }}" alt="Special">
    </a>
    <a href="{{ route('hist') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconhist.png') }}" alt="History">
    </a>
    <a href="{{ route('patients') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconPatients.png') }}" alt="Patients">
    </a>
    <a href="{{ route('infopage') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconhelp.png') }}" alt="Help">
    </a>
    <a href="{{ route('medicines') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconpill.png') }}" alt="Medicines">
    </a>
    <a href="{{ route('alarms') }}" class="btn btn-primary" role="button">
        <img src="{{ asset('images/iconAlarm.png') }}" alt="Medicines">
    </a>

</aside>
