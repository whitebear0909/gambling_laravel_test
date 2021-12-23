//sort affiliates by affiliate_id ascending
export const sortAffiliates = (affiliates) => {
  return affiliates.sort((a, b) => {
    return a["affiliate_id"] - b["affiliate_id"];
  });
};
