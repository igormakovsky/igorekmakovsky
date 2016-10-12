$(function () {

    Draggable.create(".drag", {
        type: "x,y",
        edgeResistance: 0.65,
        bounds: "body",
        //zIndexBoost: false,
        throwProps: true
    });

    Draggable.create(".spin", {
        type: "rotation",
        ease: Strong.easeOut,
        throwProps: true
    });

});