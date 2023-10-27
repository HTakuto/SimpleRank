
document.addEventListener("DOMContentLoaded", function () {
    const cardWrapper = document.querySelector(".ranking_card_wrapper");
    const cards = document.querySelectorAll(".ranking_card");
    const numCards = cards.length;
    let currentIndex = 0;

    const scrollCards = (index) => {
        for (let i = 0; i < numCards; i++) {
            if (i >= index && i < index + 5) {
                cards[i].style.display = "block";
            } else {
                cards[i].style.display = "none";
            }
        }
    };

    // 初期表示：最初の4枚を表示
    scrollCards(currentIndex);

    const nextButton = document.querySelector(".slide_right_arrow");
    const prevButton = document.querySelector(".slide_left_arrow");

    nextButton.addEventListener("click", () => {
        if (currentIndex + 5 < numCards) {
            currentIndex += 5;
            scrollCards(currentIndex);
        }
    });

    prevButton.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex -= 5;
            scrollCards(currentIndex);
        }
    });
});
