<?php

function getStateName($id)
{
    return \App\States::find($id)->name;
}