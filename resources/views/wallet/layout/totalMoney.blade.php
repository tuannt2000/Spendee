<div class="_2AsN _3EiL">
    <div class="oTaE _1n3H">
        <div class="LB4I _3BdS">
            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                <div class="_3wsj _1eTa">
                    <span class="_1zZy">Tổng Số dư</span>
                    @if ($wallet->initial_balance == 0)
                    <span class="_2Tip _39n0">{{$wallet->initial_balance}}VND</span> 
                    @elseif ($wallet->initial_balance > 0)
                    <span class="_2Tip _39n0">+{{$wallet->initial_balance}}VND</span>
                    @else
                    <span class="_2Tip _39n0" style="color:#f14c52;">{{$wallet->initial_balance}}VND</span>
                    @endif
                </div>
            </div>
            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                <div class="_3wsj _1eTa">
                    <span class="_1zZy">Tổng Thay Đổi Theo Kì</span>
                    @if ($wallet->initial_balance == 0)
                    <span class="_2Tip _39n0">{{$wallet->initial_balance}}VND</span> 
                    @elseif ($wallet->initial_balance > 0)
                    <span class="_2Tip _39n0">+{{$wallet->initial_balance}}VND</span>
                    @else
                    <span class="_2Tip _39n0" style="color:#f14c52;">{{$wallet->initial_balance}}VND</span>
                    @endif
                </div>
            </div>
            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                <div class="_3wsj _1eTa">
                    <span class="_1zZy">Tổng Chi Phí Theo Kì</span>
                    @if ($wallet->initial_balance == 0)
                    <span class="_2Tip _39n0">{{$wallet->initial_balance}}VND</span> 
                    @elseif ($wallet->initial_balance > 0)
                    <span class="_2Tip _39n0">+{{$wallet->initial_balance}}VND</span>
                    @else
                    <span class="_2Tip _39n0" style="color:#f14c52;">{{$wallet->initial_balance}}VND</span>
                    @endif
                </div>
            </div>
            <div class="_3fS2 _3cTs _3gPh _19wA _1B3o">
                <div class="_3wsj _1eTa">
                    <span class="_1zZy">Tổng Thu Nhập Theo Kì</span>
                    <span class="_2Tip _39n0">0.00 VND</span>
                </div>
            </div>
        </div>
    </div>
</div>