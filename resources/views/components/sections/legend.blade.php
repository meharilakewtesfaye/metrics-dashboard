<div class="legend flex gap-2.5 items-center text-gray-400 text-sm mb-2.5 flex-wrap">
    <span class="dot dot-red"></span><small>Total MRR</small>
    <span class="dot dot-blue"></span><small>New MRR</small>
    <span class="dot dot-green"></span><small>Reactivations</small>
    <span class="dot dot-teal"></span><small>Upgrades</small>
    <span class="dot dot-purple"></span><small>Existing</small>
    <span class="dot dot-pink"></span><small>Downgrades</small>
    <span class="dot dot-grey"></span><small>Churn</small>
</div>

<style>
.legend {
    display: flex;
    gap: 10px;
    align-items: center;
    color: #9ca3af;
    font-size: 14px;
    margin-bottom: 10px;
    flex-wrap: wrap;
}

/* Legend dots */
.dot { 
    display: inline-block; 
    width: 10px; 
    height: 10px; 
    border-radius: 50%; 
    margin-right: 6px; 
    box-shadow: 0 2px 6px rgba(0,0,0,0.6); 
    flex-shrink: 0;
}
.dot-red { background: #fb7185; }
.dot-blue { background: #60a5fa; }
.dot-green { background: #34d399; }
.dot-teal { background: #22c1c3; }
.dot-purple { background: #a78bfa; }
.dot-pink { background: #f0abfc; }
.dot-grey { background: #9ca3af; }

.legend small {
    white-space: nowrap;
    display: flex;
    align-items: center;
    gap: 4px;
}

/* Responsive Styles */
@media (max-width: 900px) {
    .legend {
        justify-content: center;
        gap: 8px;
    }
}

@media (max-width: 600px) {
    .legend {
        font-size: 12px;
        gap: 6px;
    }
    
    .dot {
        width: 8px;
        height: 8px;
        margin-right: 4px;
    }
}

@media (max-width: 480px) {
    .legend {
        justify-content: flex-start;
    }
    
    .legend small {
        font-size: 11px;
    }
}
</style>