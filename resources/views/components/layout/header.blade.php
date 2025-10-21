<header class="main-header flex items-center gap-4.5 mb-4.5">
    <button class="back bg-transparent border-none text-gray-400 cursor-pointer p-2 rounded-lg hover:bg-gray-800 flex items-center gap-2">
        <img src="/img/solar_arrow-left-linear.png" alt="" class="nav-icon">
        <span class="back-text">Back</span>
    </button>
</header>

<style>
.main-header {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 18px;
}

.back {
    background: transparent;
    border: none;
    color: #9ca3af;
    cursor: pointer;
    padding: 8px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background-color 0.2s ease;
}

.back:hover {
    background: #374151;
}

.nav-icon {
    width: 16px;
    height: 16px;
}

.back-text {
    font-size: 14px;
    font-weight: 500;
}

/* Responsive Styles */
@media (max-width: 900px) {
    .main-header {
        margin-bottom: 16px;
        gap: 16px;
    }
    
    .back {
        padding: 6px 8px;
    }
}

@media (max-width: 600px) {
    .main-header {
        margin-bottom: 14px;
        gap: 12px;
    }
    
    .back-text {
        font-size: 13px;
    }
    
    .nav-icon {
        width: 14px;
        height: 14px;
    }
}

@media (max-width: 480px) {
    .back-text {
        display: none;
    }
    
    .back {
        padding: 8px;
    }
}
</style>