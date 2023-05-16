<div class="row mb-5">
    <div class="col-md-3 col-6 upper-button">
        <a href="{{ route('krasyar') }}" type="button" class="btn btn-danger text-start h-100 big-buttons">
            <h5>Красный Яр</h5>
            <p>Сообщить о работе сотрудника Красного Яра</p>
        </a>
    </div>
    <div class="col-md-3 col-6 upper-button">
        <a href="{{ route('baget') }}" type="button" class="btn btn-warning text-start h-100 big-buttons">
            <h5>Батон</h5>
            <p>Сообщить о нарушении сотрудником батона</p>
        </a>
    </div>
    <div class="col-md-3 col-6">
        <a href="{{ route('office') }}" type="button" class="btn btn-success text-start h-100 big-buttons">
            <h5>Центральный офис</h5>
            <p>Оставить сообщение о работе центрального офиса</p>
        </a>
    </div>
    <div class="col-md-3 col-6">
        <a href="{{ route('improve') }}" type="button" class="btn btn-info text-start h-100 big-buttons">
            <h5>Условия труда</h5>
            <p>Оставить пожелание по улучшению условий труда</p>
        </a>
    </div>
</div>

<style>
    @media (max-width: 768px) {
        .upper-button {
            margin-bottom: 24px;
        }
    }

    .big-buttons {
        color: white;
    }

    .big-buttons:hover {
        color: white;

    }

    .btn:active {
        color: white !important;
    }
</style>
