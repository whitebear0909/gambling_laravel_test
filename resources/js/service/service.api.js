import axios from "axios";

export const getAffiliates = () => {
  return axios.get(`/api/v1/affiliates`);
};
